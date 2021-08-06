@extends('admin.template')

@section('mycontent')


<h1 class="d-flex justify-content-center">Détail produit</h1>



<div class="card mb-3" style="max-width: 540px;">
    
    <div class="row g-0">
      <div class="col-md-4">
    
        <img src="{{asset('produitsImages/'.$produit->photoPrincipal)}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$produit->name}}</h5>
          <p class="card-text">{{$produit->description}}</p>

          @foreach ($produit->tag as $tag)
          <a class="text-white btn btn-primary"  href="{{route('admin.tags.create', ['id' =>$tag->id])}}">{{$tag->name}}</a>
          @endforeach

          <p class="card-text"><small class="text-muted">{{$produit->prixTTC()}} €</small></p>
          <div class="mb-3">

            <form action="{{route('admin.carts.add', ['id' => $produit->id])}}" method="POST" id="ajoutPanier">
              @csrf
              <label for="size">Taille</label>
              <select name="size" id="size" class="form-control mb-2">
                  <option selected disabled >--</option>
                  <option value="40">40</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
              </select>
              <label for="quantity">Quantité</label>
              <input type="number" value="1" name="quantity" id="quantity" class="form-control">
            </form>
            <button type="submit" class="btn btn-success mt-2" form="ajoutPanier">Ajouter au panier</button>{{-- bouton relié au formulaire --}}
          </div>
          
        </div>
      </div>
    </div>
</div>

@endsection    