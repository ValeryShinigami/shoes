<?php

namespace App\Http\Controllers\User;

use App\Models\marque;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\produits;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth', 'user']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('user.index');
        $produits = produits::where('nouveaute', 1)->get();
        //dd($products);
        $marques = marque::where('isOnline', 1)->get(); //pour que l'on puisse récupérer les marques sinon on a une erreur car il ne reconnait pas
        return view('user.index', compact('produits', 'marques'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
         //pour récupérer les produits en nouveautés
         $produits = produits::find($request->id);
         return view ('user.create', compact('produit'));

    }
}
