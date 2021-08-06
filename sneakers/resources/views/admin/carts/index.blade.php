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
                            <th>P.U</th>
                            <th>Total TTC</th>
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
    
                                    <input style="display: inline-block" id="qte" class="form-control col-sm-4" type="number" value="{{$produit->quantity}}">    
    
                                    <a  class="pl-2" href=""><i class="fas fa-sync"></i> </a>
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
                        <td colspan="2"></td>
                        <td>Total HT</td>
                        <td>24.17 €</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td>TVA (20%)</td>
                        <td>4.83 €</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td>Total TTC</td>
                        <td>{{number_format($total, 2)}} €</td>
                    </tr>
                    </tfoot>
                </table>
                <a class="btn btn-block btn-outline-dark" href="">Commander</a>
            </div>
        </section>
    
    </main>

@endsection