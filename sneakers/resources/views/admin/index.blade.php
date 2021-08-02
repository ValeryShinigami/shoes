@extends('admin.template')

@section('mycontent')


<div class="nikeThumb container">
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col ">
            <div class="card h-100">
                <div class="card-body text-center mb-3">
                    <a class="hommes" href="{{route('admin.produits.index')}}">Hommes</a>
                </div>
                <img src="{{ asset('imagesneak/bo.jpeg')}}" class="card-img-bottom h-100" alt="hommes">  
            </div>
        </div>
        
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center mb-3">
                    <a href="{{--route('admin.femmes.index')--}}">Femmes</a>
                </div>
                <img  src="{{ asset('imagesneak/femme.jpeg')}}" class="card-img-bottom h-100" alt="femmes">
            </div>
        </div>
        
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center mb-3">
                    <a href="{{--route('admin.enfants.index')--}}">Enfants</a>
                </div>
                <img src="{{ asset('imagesneak/kid.jpeg')}}" class="card-img-bottom h-100" alt="enfants">
            </div>
        </div>
    </div>

</div>   


<div class="album py-5 bg-light mt-5">
  <h1 class="d-flex justify-content-center">Nouveautés</h1>
    <div class="container">  
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        {{--dump($products)--}}
        @foreach ($products as $product)

          <div class="col mb-4">
          <div class="card shadow-sm">
            <img class="card-img-top" width="100%" height="225" src="{{asset('productsImages/'.$product->photoPrincipal)}}" alt="shoes">
            <div class="card-body">
              <p class="card-text">{{$product->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">{{--$product->marque->name--}}</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">{{$product->name}}</button>
                  <a href="{{ route('admin.create', ['id' => $product->id])}}" class="btn btn-sm btn-outline-secondary">Voir</a>
                </div>
                <div class="text-muted">{{number_format($product->prixHT, 2)}}.€</div>
              </div>
            </div>
          </div>
          </div>
        @endforeach

    </div>
</div>


@endsection                         