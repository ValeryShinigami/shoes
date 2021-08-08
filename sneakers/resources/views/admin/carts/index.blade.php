@extends('layouts.app')
@section('content')

    <main role="main">
        {{--dd($cartCollection)--}}
        <section class="py-5">
            <div class="container">
                    <h1 class="jumbotron-heading"> <span class="badge badge-primary ">Panier </span></h1>
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
                            <form action="{{route('admin.carts.update', $produit->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input style="display: inline-block" id="qte" class="form-control col-sm-4" type="number" value="{{$produit->quantity}}">
                            </form>
                             
                        </td>
                        
                        <td>
                            <form action="{{route('admin.carts.delete', $produit->id)}}" method="POST">
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
                <a class="btn btn-block btn-outline-dark" href="">Commander</a>
            </div>
        </section>
    
    </main>

@endsection