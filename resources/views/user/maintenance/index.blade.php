@extends('user.templateProducts')

@section('mycontent')

<a href="{{route('user.index')}}"><span class="badge badge-primary "><img src="https://img.icons8.com/material-sharp/24/ffffff/home.png"/></span></a>

<h1 class="animate__animated animate__backInDown d-flex justify-content-center">Tous les produits femme</h1>

<figure class="snip1504 d-flex justify-content-center">
    <img src="{{asset('imagesneak/int.jpeg')}}" class="img-fluid" alt="photo" />
    <figcaption>
      <h2>Sneakers women</h2>
      <h4>Coming soon</h4>
    </figcaption>
</figure>

@endsection    