<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth', 'admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = category::latest()->get();
        return view ('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //on valide les données
        
         $validator = Validator::make($request->all(), 
         [
             "name" => ['required', 'string', 'max:255', 'unique:categories'], //exists = unique mais en ++ est ce que le nom envoyé dans la requête existe deja
         ], 
         
         [
             "name.required" => "le nom est obligatoire",
             "name.string" => "entrez une chaine de caractère valide",
             "name.max" => "entrez au maximum 255 caractères",
             //"name.exists" => "cette catégorie n'existe pas dans la base de donnée",
             "name.unique" => "cette catégorie existe déjà. Veuillez en choisir une autre"
         
         ]);
 
         if ($validator->fails()) 
         {
             return redirect()->back()->withErrors($validator)->withInput();
         }
 
         //et si c'est bon on rentre les infos dans la BDD
         
         Category::create([
             "name" => $request->name
         ]);
 
         //puis on redirige l'utilisateur administrateur vers la page index des catégories
 
         return redirect()->route("admin.categories.index")->with([
             "success" => "Votre catégorie a été créée avec succès."
         ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $category = Category::find($id);
        $category = Category::find($id);
        //if ($category) //le if pour vérifier que si ca existe return true alors sinon redirection

        if (!$category) 
        {
            return redirect()->route('admin.categories.index')->with([
                "warning" => "Cette catégorie n'existe pas"
            ]);
        }
        else
        {
            return view("admin.categories.edit", compact('category'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //on valide les données
        $category = category::find($id);
         $validator = Validator::make($request->all(), 
         [
             "name" => ['required', 'string', 'max:255', 'unique:categories'], //exists = unique mais en ++ est ce que le nom envoyé dans la requête existe deja
         ], 
         
         [
             "name.required" => "le nom est obligatoire",
             "name.string" => "entrez une chaine de caractère valide",
             "name.max" => "entrez au maximum 255 caractères",
             //"name.exists" => "cette catégorie n'existe pas dans la base de donnée",
             "name.unique" => "cette catégorie existe déjà. Veuillez en choisir une autre"
         
         ]);
 
         if ($validator->fails()) 
         {
             return redirect()->back()->withErrors($validator)->withInput();
         }
 
         //et si c'est bon on rentre les infos dans la BDD
         $category->slug = null;
         $category->update([
             "name" => $request->name
         ]);
 
         //puis on redirige l'utilisateur administrateur vers la page index des catégories
 
         return redirect()->route("admin.categories.index")->with([
             "success" => "Votre catégorie a été modifiée avec succès."
         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $categorie = category::find($id);
       $categorie->delete();
        return redirect()->route("admin.categories.index")->with([
        "success" => "Votre catégorie a été supprimé avec succès."
        ]);

    }
}
