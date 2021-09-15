@extends('layouts.app')
@section('content')

    <main role="main">
        {{--dd($cartCollection)--}}
        <section class="py-5">
            <div class="container">
                <a href="{{route('user.index')}}"><span class="badge badge-primary "><img src="https://img.icons8.com/material-sharp/24/ffffff/home.png"/></span></a>
                    <h1 class="jumbotron-heading"> <span class="badge badge-primary ">Cart</span></h1>
                    <a class="nav-link" href="{{route('user.carts.index')}}">Panier <span class="badge badge-pill badge dark"><img src="https://img.icons8.com/ios/35/000000/sneakers.png"/>{{Cart::getTotalQuantity()}}</span></a>
                <table class="table table-bordered table-responsive-sm">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Qte</th>
                            <th>delete</th>
                            <th>P.U</th>
                            <th>Total HT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartCollection as $produit)
                            
                        
                    <tr>
                        <td>
                            <img src="{{asset('produitsImages/'.$produit->attributes['photo'] )}}" width="100" height="100" class="rounded-circle img-fluid mb-2" alt="...">
                            
                            <div>
                                Nom: {{$produit->name}}
                            </div>
                            <div>  
                                Taille : {{ $produit->attributes['size'] }}
                            </div>
                        </td>
                        
                        
                        <td>
                            <form action="{{route('user.carts.update', $produit->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input style="display: inline-block" name="quantity" class="form-control col-sm-4" type="number" value="{{$produit->quantity}}">
                                <button type="submit" class="btn btn-sm btn-primary" >modifier</button>

                            </form>
                        </td>
                       
                        
                        <td>
                            <form action="{{route('user.carts.delete', $produit->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" value="supprimer" class="btn btn-sm btn-danger" onclick="return confirm('confirmer la suppression ?')">

                              </form> 
                        </td>
                        <td>
                            {{number_format($produit->price, 2)}}
                        </td>
                        <td>
                            {{number_format($produit->price * $produit->quantity, 2)}} €
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3"></td>
                        <td>Total HT</td>
                        <td>{{number_format($total, 2)}} €</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>TVA (20%)</td>
                        <td>{{number_format(($total * 0.2), 2)}} €</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>Total TTC</td>
                        <td>{{number_format(($total + ($total * 0.2)), 2)}} €</td>
                    </tr>
                    </tfoot>
                </table>
                <form action="{{--route()--}}" method="">
                   {{--<a class="btn btn-block btn-outline-dark" href="">Commander</a>--}}
                    <button type="submit" class="btn btn-block btn-outline-dark">Payer</button>
                </form>
                
            </div>
        </section>
    
    </main>

@endsection