@extends('admin.template')

@section('mycontent')

    <div class="row row-cols-1 row-cols-md-3 g-4 px-4">
        <div class="col ">
            <div class="card h-100">
                <div class="card-body text-center mb-3">
                    <a class="hommes" href="{{ route('admin.hommes.index') }}">Hommes</a>
                </div>
                <img src="{{ asset('imagesneak/bo.jpeg')}}" class="card-img-bottom h-100" alt="hommes">  
            </div>
        </div>
        
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center mb-3">
                    <a href="{{ route('admin.femmes.index') }}">Femmes</a>
                </div>
                <img src="{{ asset('imagesneak/femme.jpeg')}}" class="card-img-bottom h-100" alt="femmes">
            </div>
        </div>
        
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center mb-3">
                    <a href="{{ route('admin.enfants.index') }}">Enfants</a>
                </div>
                <img src="{{ asset('imagesneak/kid.jpeg')}}" class="card-img-bottom h-100" alt="">
            </div>
        </div>
    </div>

@endsection                         