@extends('admin.template')

@section('mycontent')


<h1 class="d-flex justify-content-center">Détail produit</h1>



<div class="card mb-3" style="max-width: 540px;">
    
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('productsImages/'.$product->photoPrincipal)}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <p class="card-text"><small class="text-muted">{{number_format($product->prixHT, 2)}}.€</small></p>
          <div class="mb-3">
              <label for="taille">Taille</label>
              <select name="taille" id="taille" class="form-control">
                  <option selected >--</option>
                  <option value="40">40</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
              </select>
          </div>
          <a href="#" class="btn btn-success">Ajouter au panier</a>
        </div>
      </div>
    </div>
</div>

@endsection    