@extends('user.template')

@section('mycontent')


<h1 class="animate__animated animate__backInDown d-flex justify-content-center">Tous les produits homme</h1>

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
                    <button type="button" class="btn btn-sm btn-outline-secondary">{{$produit->marque->name}}</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">{{$produit->name}}</button>
                    <a href="{{ route('user.produits.create',['id' => $produit->id])}}" class="voir btn btn-sm btn-outline-secondary">Voir</a>
                  </div>
                  <div class="text-muted">{{ $produit->prixTTC() }} €</div> {{--number_format() fonction php pour indiquer le nombre après la virgule --}}
                </div>
              </div>
            </div>
            </div>
          @endforeach
      </div>
      <div class="d-flex justify-content-center align-items-center">
        {{ $produits->links() }} {{-- ajouter les boutons de pagination --}}
      </div>
        
    
  </div>
@endsection         