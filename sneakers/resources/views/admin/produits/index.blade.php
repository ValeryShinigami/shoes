@extends('admin.template')

@section('mycontent')


<h1 class="d-flex justify-content-center">Produits hommes</h1>

<div class="album py-5 bg-light ">
      <div class="container">  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          {{--dump($produits)--}}
          @foreach ($produits as $produit)
  
            <div class="col mb-4">
            <div class="card shadow-sm">
              <img class="card-img-top" width="100%" height="225" src="{{asset('produitsImages/'.$produit->photoPrincipal)}}" alt="shoes">
              <div class="card-body">
                <p class="card-text">{{$produit->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">{{$produit->name}}</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                  </div>
                  <div class="text-muted">{{$produit->prixHT}}.€</div>
                </div>
              </div>
            </div>
            </div>
          @endforeach
  
      </div>
  </div>

@endsection         