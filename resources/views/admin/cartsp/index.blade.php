@extends('layouts.app')
@section('content')

    <main role="main">
        {{--dd($cartCollection)--}}
        <section class="py-5">
            <div class="container">
                    <a href="{{route('admin.index')}}"><span class="badge badge-primary "><img src="https://img.icons8.com/material-sharp/24/ffffff/home.png"/></span></a>
                    <h1  class="jumbotron-heading"> <span class="badge badge-primary ">Cart</span></h1>
                    <a class="nav-link" href="{{route('admin.cartsp.index')}}">Panier <span class="badge badge-pill badge dark"><img src="https://img.icons8.com/ios/35/000000/sneakers.png"/>{{Cart::getTotalQuantity()}}</span></a>
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
                        @foreach ($cartCollection as $product)
                            
                        
                    <tr>
                        <td>
                            <img src="{{asset('productsImages/'.$product->attributes['photo'] )}}" width="100" height="100" class="rounded-circle img-fluid mb-2" alt="photo">
                            
                            <div>
                                Nom: {{$product->name}}
                            </div>
                            <div>  
                                Taille : {{ $product->attributes['size'] }}
                            </div>
                        </td>
                        
                        
                        <td>
                            <form action="{{route('admin.cartsp.update', $product->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input style="display: inline-block" name="quantity" class="form-control col-sm-4" type="number" value="{{$product->quantity}}">
                                <button type="submit" class="btn btn-sm btn-primary" >modifier</button>

                            </form>
                        </td>
                       
                        
                        <td>
                            <form action="{{route('admin.cartsp.delete', $product->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" value="supprimer" class="btn btn-sm btn-danger" onclick="return confirm('confirmer la suppression ?')">

                              </form> 
                        </td>
                        <td>
                            {{number_format($product->price, 2)}}
                        </td>
                        <td>
                            {{number_format($product->price * $product->quantity, 2)}} €
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
                <form action="{{----}}" method="">
                    @csrf
                   {{--<a class="btn btn-block btn-outline-dark" href="">Commander</a>--}}
                    <button type="submit" class="btn btn-block btn-outline-dark">Payer</button>
                </form>
                
            </div>
        </section>
    
    </main>

@endsection