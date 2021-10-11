@extends('user.template')

@section('mycontent')

<div class="nikeThumb container">
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="teste1 col ">
            <div class="card h-100">
                <div class="card-body text-center mb-3">
                    <a class="hommes" href="{{route('user.produits.index')}}">Hommes</a>
                </div>
                <div id="cross-fading" class="card-img-bottom h-100">
                  <img class="h-100" src="{{ asset('imagesneak/satria.jpg')}}" alt="hommes">  
                  <img id="top" class="h-100" src="{{asset('imagesneak/leo.jpg')}}" alt="femmes">
                </div>
            </div>
        </div>
        
        <div class="teste1 col">
             <div class="card h-100">
                <div class="card-body text-center mb-3">
                    <a class="femmes" href="{{route('user.maintenance.index')}}">Femmes</a>
                </div>
                <div id="cross-fading" class="card-img-bottom h-100">
                 <img class="h-100" src="{{ asset('imagesneak/femme.jpeg')}}" alt="hommes">  
                 <img id="top" class="h-100" src="{{asset('imagesneak/jama.jpg')}}" alt="femmes">
               </div>
             </div>
        </div>

        <div class="teste1 col">
            <div class="card h-100">
                <div class="card-body text-center mb-3">
                    <a class="enfants" href="{{route('user.maintkids.index')}}">Enfants</a>
                </div>
                <div id="cross-fading" class="card-img-bottom h-100">
                  <img src="{{ asset('imagesneak/ryan.jpg')}}" class="h-100" alt="enfants">
                  <img id="top" src="{{ asset('imagesneak/kid.jpeg')}}" class="h-100" alt="enfants">
                 </div>
            </div>
        </div>
    </div>
</div>   


<div class="album py-5 bg-light mt-5">
  <h1 class="d-flex justify-content-center">Nouveautés</h1>
    <div class="container">  
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        {{--dump($products)--}}
        
      
        @foreach ($produits as $productt)
        
        <div class="col mb-4">
        <div class="card shadow-sm">
          <img class="card-img-top" width="100%" height="225" src="{{ asset('produitsImages/'.$productt->photoPrincipal)}}" alt="shoes">
          <div class="card-body">
            <p class="card-text">{{$productt->description}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn  btn-sm btn-outline-secondary">{{$productt->marque->name}}</button>
                <button type="button" class="btn  btn-sm btn-outline-secondary">{{$productt->name}}</button>
                <a href="{{ route('user.produits.create', ['id' => $productt->id])}}" class="voir btn btn-sm btn-outline-secondary">Voir</a>
              </div>
              <div class="text-muted">{{$productt->prixTTC()}} €</div>
            </div>
          </div>
        </div>
        </div>
        
      @endforeach
            
        
       

    </div>
</div>


@endsection                         