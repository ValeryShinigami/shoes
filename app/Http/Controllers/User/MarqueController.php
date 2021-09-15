<?php

namespace App\Http\Controllers\user;


use App\Models\marque;
use App\Models\produits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // public function create(Request $request)
    //{
        //
        //retourne la vue par marques
        // récuperer les marques isOnline == 1
     //   $marques = marque::where('isOnline', 1)->get();
        //dd($marques);
       // $produits = produits::where('marque_id', $request->id)->get();
      //  return view ('user.marques.create', compact('produits', 'marques'));
        
        
  //  }
    public function create(Request $request)
    {
        $marques = marque::where('isOnline', 1)->get();
        $produits = produits::where('marque_id', $request->id)->get();
        return view ('user.marques.create', compact('produits', 'marques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
   // {
        //
    //}

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
