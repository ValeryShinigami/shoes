@extends('user.template')

@section('mycontent')

<h1 class="animate__animated animate__flip d-flex justify-content-center">Détail produit</h1>

<div class="card mx-auto mb-3" style="max-width: 540px;">
    
    <div class="row g-0">
      <div class="col-md-4">
    
        <img src="{{asset('produitsImages/'.$produit->photoPrincipal)}}" class="img-fluid rounded-start" alt="photo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$produit->name}}</h5>
          <div class="badge badge-pill badge-info mb-2">{{$produit->stock == 0? "indisponible":"disponible"}}</div>

          <p class="card-text">{{$produit->description}}</p>

          @foreach ($produit->tag as $tag)
          <a class="text-white btn btn-primary"  href="{{--route('admin.tags.create', ['id' =>$tag->id])--}}">{{--$tag->name--}}</a>
          @endforeach

          <p class="card-text"><small class="text-muted">{{$produit->prixTTC()}} €</small></p>
          <div class="mb-3">

           @if ($produit->stock >= 1)
           <form action="{{route('user.carts.add', ['id' => $produit->id])}}" method="POST">
            @csrf
            <label for="size">Taille</label>
            <select name="size" id="size" size="1" class="form-control mb-2">
                {{--<option selected disabled >--</option>--}}
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="46">46</option>
            </select>
            <label for="quantity">Quantité</label>
            {{-- value="1" on démarre la quantité à 1 --}}
            <input type="number" value="1" name="quantity" id="quantity" class="form-control"> 
                {{-- bouton relié au formulaire grace à id=ajoutPanier et form=ajoutPanier --}}
            <button type="submit" class="btn btn-success mt-2">Ajouter au panier</button>
          </form> 
           @endif
          </div>
        </div>
      </div>
    </div>
</div>

@endsection    