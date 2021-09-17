@extends('user.templateProducts')

@section('mycontent')

<h1 class="animate__animated animate__flip d-flex justify-content-center">Détail nouveauté</h1>


<a href="{{route('user.index')}}"><span class="badge badge-primary mb-3 "><img src="https://img.icons8.com/material-sharp/24/ffffff/home.png"/></span></a>

<div class="card mb-3" style="max-width: 540px;">
    
    <div class="row g-0">
      <div class="col-md-4">
    
        <img src="{{asset('productsImages/'.$product->photoPrincipal)}}" class="img-fluid rounded-start" alt="photo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <!--<div class="badge badge-pill badge-info mb-2">{{--$produit->stock == 0? "indisponible":"disponible"--}}</div>-->

          <p class="card-text">{{$product->description}}</p>



          <p class="card-text"><small class="text-muted">{{$product->prixTTC()}} €</small></p>
          <div class="mb-3">

           <form action="{{route('user.cartsp.add', ['id' => $product->id])}}" method="POST">
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
           
         
         
        
             
           
           
            
          </div>
          
        </div>
      </div>
    </div>
</div>

@endsection    