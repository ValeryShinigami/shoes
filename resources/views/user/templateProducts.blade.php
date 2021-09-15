@extends('layouts.app')

@section('content')

  <div class="col-md-12">
      <h1 class="text-center">
          @yield('h1')
      </h1>
      @yield('mycontent')
  </div>


   
@endsection