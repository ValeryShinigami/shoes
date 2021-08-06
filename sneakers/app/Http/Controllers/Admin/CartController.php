<?php

namespace App\Http\Controllers\Admin;


use App\Models\produits;
use Cart;
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
        //retourne la vue du panier 
        $cartCollection = Cart::getContent(); //pour voir la collection que l'on a dans le pannier
        //dd($cartCollection);
        $total = Cart::getTotal();//pour récuperer le total dans le package github
        return view('admin.carts.index', compact('cartCollection', 'total'));
    }

    public function add(Request $request) //on recupere lobjet request et le produit dans la table
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

        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect(route('admin.carts.index'));

        
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
