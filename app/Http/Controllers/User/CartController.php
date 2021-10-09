<?php

namespace App\Http\Controllers\user;

use Cart;
use App\Models\produits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //retourne la vue du panier 
         $cartCollection = Cart::getContent(); //pour voir la collection que l'on a dans le pannier
         //dd($cartCollection);
         $total = Cart::getTotal();//pour récuperer le total dans le package github
         return view('user.carts.index', compact('cartCollection', 'total'));
          
    }


    //fonction représentant le STORE
    public function add(Request $request) //on recupere l'objet request et le produit dans la table
    {
        $produit = produits::find($request->id);
        //ajouter un produit au panier
            Cart::add(array(
                'id' => $produit->id,
                'name' => $produit->name,
                'price' => $produit->prixHT,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'size'=>$request->size, 'photo'=>$produit->photoPrincipal)
        ));
        return redirect()->route('user.carts.index')->with(["success" => "Votre article a été ajouté au panier avec succès"]);

        
    }

    public function update(Request $request, $id)
    {
        //fonction permettant d'augmenter diminuer la quantité
        Cart::update($id, [
            //'quantity' => $request->quantity +1,
            'quantity' => ['relative' => false, 'value'=> $request->quantity]
            //relative' => false,
            //'value' => $request->quantity
            
        ]);
        return redirect()->route('user.carts.index')->with(["success" => "Votre article a bien été modifié"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cart::remove($id);
        return redirect()->route('user.carts.index')->with(["success" =>"Votre article a bien été supprimé avec succès"]);
    }

    public function clear()
    {
        //methode pour simuler un paiement réalisé en attendant paypal
        $produitclear = Cart::clear();
        return redirect()->route('user.carts.index')->with(["success" =>"Paiemement réalisé avec succès"]);
    }
    public function clear2()
    {
        //methode pour simuler un paiement réalisé en attendant paypal
        $produitclear = Cart::clear();
        return redirect()->route('user.carts.index')->with(["warning" =>"Paiemement refusé choisissez une quantité supérieur à zéro svp"]);
    }

}
