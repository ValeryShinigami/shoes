@extends('admin.template')

@section('h1', 'Liste des SneakersMen')

@section('mycontent')

<a href="{{-- route('admin.hommes.create') --}}" class="btn " type="button">New Sneakers</a>
    
@if (session('warning'))
    <div class="alert alert-warning alert -dismissible fade show" role="alert">
        {{session('warning')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success alert -dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="barre table-responsive">
    <table id="table" class="table table-striped table-hover text-center">
        <thead class="theadImage">
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Taille</th>
                <th>Prix</th>
                <th>publié</th>
                <th>Paramètres</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                    <tr>
                        {{--asset se positionne dans le dossier PUBLIC il va chercher le dossier upload/posts/images/ --}}
                        <td><img src="{{ asset($post->image) }}" width='100' height="100" alt="image"></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td> {{--pour récupérer le nom de la catégorie pour la jointure --}}
                        
                        <td>
                            @if ($post->published == 1)
                               <div>
                                    publié
                               </div> 
                               <div>
                                   <small>le {{ $post->published_at->format("d/m/Y à H:i:s") }}</small>
                               </div>
                               @else
                                <div>
                                    Non publié
                                </div>
                            @endif

                            {{--<p>{{ $post->published == 1 ? 'Publié' : 'Non publié' }}</p>--}}
                            <form action="{{-- route('admin.posts.published', $post->id) --}}" method="POST">
                                @csrf
                                @method('put')
                                <div class="custom-control custom-switch">
                                     <input type="checkbox" {{ $post->published ==1 ? 'checked' : ''}}  name="published_input" class="custom-control-input" id="switch-{{$post->id}}" onchange="this.form.submit()">
                                     <label class="custom-control-label" for="switch-{{ $post->id}}"></label>
                                 </div>
                             </form>
                        </td>
                            
                        <td>
                            <a href="{{-- route('admin.posts.edit', $post->id) --}}" class="modifier btn btn-sm btn-secondary">Modifier</a>
                            <form action="{{ route('admin.posts.trashed', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Corbeille" class="btn btn-sm btn-danger" onclick="return confirm('Déplacer cette article dans la corbeille ?')">
                            </form>
                        </td>
                    </tr>                
            @endforeach
        </tbody>

    </table>
</div>







@endsection