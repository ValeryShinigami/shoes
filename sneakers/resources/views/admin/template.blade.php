@extends('layouts.app')

@section('content')

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid justify-content-center">
      <form class="d-flex justify-content-center">
          @csrf
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="col-md-10">
      <h1 class="text-center">
          @yield('h1')
      </h1>
      @yield('mycontent')
  </div>


    
@endsection