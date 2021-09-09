<?php

namespace App\Http\Controllers\admin;

use App\Models\marque;
use App\Models\produits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProduitController extends Controller
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
        //on retourne 6 produits à la vue avec la pagination
        $produits = produits::paginate(6); //->random(6) récup aléatoire 6 images
        //dd($produits) pour vérifier si on récupre bien les données produits;
        $marques = marque::where('isOnline', 1)->get();
        //condition ternaire pour disponible ou non pour le stock
        
        return view('admin.produits.index', compact('produits', 'marques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request->id);
        //Création du produit vu en détail
         $produit = produits::find($request->id);
        //return view ('admin.produits.create', compact('produit'));
        //dd($produit);
        $marques = marque::where('isOnline', 1)->get();
        return view ('admin.produits.create', compact('produit','marques')); //on récupère les produit par id de la BDD


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
