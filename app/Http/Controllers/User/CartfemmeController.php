<?php

namespace App\Http\Controllers\User;

use Cart;
use App\Http\Controllers\Controller;
use App\Models\produitfemme;
use Illuminate\Http\Request;

class CartfemmeController extends Controller
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
         return view('user.cartsfemme.index', compact('cartCollection', 'total'));
    }

    //fonction représentant le STORE
    public function add(Request $request) //on recupere l'objet request et le produit dans la table
    {
        $produitfemme = produitfemme::find($request->id);
        //ajouter un produit au panier
            Cart::add(array(
                'id' => $produitfemme->id,
                'name' => $produitfemme->name,
                'price' => $produitfemme->prixHT,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'size'=>$request->size, 'photo'=>$produitfemme->photoPrincipal)
        ));
        return redirect()->route('user.cartsfemme.index')->with(["success" => "Votre article a été ajouté au panier avec succès"]);

        
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
    public function update(Request $request, $id)
    {
        //
        //fonction permettant d'augmenter diminuer la quantité
        Cart::update($id, [
            //'quantity' => $request->quantity +1,
            'quantity' => ['relative' => false, 'value'=> $request->quantity]
            //relative' => false,
            //'value' => $request->quantity
            
        ]);
        return redirect()->route('user.cartsfemme.index')->with(["success" => "Votre article a bien été modifié"]);
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
        Cart::remove($id);
        return redirect()->route('user.carts.index')->with(["success" =>"Votre article a bien été supprimé avec succès"]);
    }

    public function clear($id)
    {
        //methode pour simuler un paiement réalisé en attendant paypal
        Cart::clear($id);
        return redirect()->route('user.carts.index')->with(["success" =>"Paimement réalisé avec succès"]);
    }


}
