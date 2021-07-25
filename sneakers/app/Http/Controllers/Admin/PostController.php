<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Homme;


class PostController extends Controller
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
        $posts = Post::latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hommes = Homme::all();
        return view('admin.posts.create', compact('hommes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            "title" => ["required", "string", "max:255"],
            "homme_id" => ["required", "integer", "exists:hommes,id"], //est ce que la catégorie existe dans la bdd ou non avec EXISTS
            "price" => ["required", "string"],
            "image" => ["required", "image", "dimensions:min_width=150,min_height=150"], //dimension de l'image pour ne pas utiliser des images petits ce n'est pas obligatoire
            "content" => ["required", "string"]
        ],

        [
            "title.required" => "le ttire est obligatoire",
            "title.string" => "Entrez une chaine de caratère",
            "title.max" => "Maximum 255 caractères",

            "homme_id.required" => "la marque est obligatoire",
            "homme_id.integer" => "ceci doit être un entier",
            "homme_id.exists" => "cette catégorie n'existe pas",

            "price.required" => "le prix est obligatoire",
            "prix.string" => "Veuillez entrer une chaine de caractères",

            "image.required" => "l'image est obligatoire",
            "image.image" => "ceci n'est pas une image",
            "image.dimansions" => "largeur min: 100px et hauteur min: 100px",

            "content.required" => "le contenu est obligatoire",
            "content.string" => "Veuillez entrer une chaine de caractères",
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
         // je recupère l'image envoyée depuis le formulaire du Create
        $image = $request->image; //ceci est l'image en elle même + toutes les donnees dans la requete qui concerne l'image 

        //je crée un nom complet pour l'image afin de ne pas avoir 2 images qui auront le même nom
        $image_complete_name = time() . "_" . rand(1, 999999) . "_" . $image->getClientOriginalName();
        //la fonction time() retourne le nombre de seconde à cette valeur ressortie la fonction rand()
        //concerne la probabilité que lon prenne l'image a un moment.
        //getClientOriginalName() = elle recupère le nom de l'image et l'extension

        //exemple: l'image va ressortir avec le code unique suivant 234456655_345_850JPEG 



         //je déplace l'image qui sera dans le dossier public/uploads/posts/images/
        $image->move('uploads/posts/images/', $image_complete_name); // move() c'est pour ce positionner au niveau du dossier Public automatiquement 

        Post::create([
            "title" => $request->title,
            "homme_id" => $request->homme_id,
            "price" => $request->price,
            "image" => "uploads/posts/images/" . $image_complete_name,
            "content" => $request->content,

        ]);

        return redirect()->route('admin.posts.index')->with([
            "success" => "votre article vient d'être sauvegardé"
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
