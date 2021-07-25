@extends('admin.template')

@section('datatables') {{--ajout du cloud tables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.js"></script>

    <script>
        $(document).ready( function () {
        $('#table').DataTable();
        } );
    </script>

@endsection

@section('h1', 'Liste des articles')

@section('mycontent')

<div class="d-flex justify-content-end align-items-center">
        <a href="{{route('admin.posts.create')}}" class="btn btn-secondary">Nouvel article</a>
</div>

@if (session('warning'))
    <div class="alert alert-warning alert -dismissible fade show" role="alert">
        {{ session('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label=Close>
            <span aria-hidden="true">&times;</span>
        </button>

    </div>
@endif

@if (session('success'))
    <div class="alert alert-success alert -dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label=Close>
            <span aria-hidden="true">&times;</span>
        </button>

    </div>
@endif

<div class="barre table-responsive">
    <table id="table" class="table table-striped table-hover text-center">
        <thead class="theadImage">
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Marque</th>
                <th>Prix</th>
                <th>Voir Contenu</th>
                <th>Publié ?</th>
                <th>Paramètres</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                    <tr>
                        {{--asset se positionne dans le dossier PUBLIC il va chercher le dossier upload/posts/images/ --}}
                        <td><img src="{{ asset($post->image) }}" width='150' height="150" alt="image"></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->homme->name }}</td> {{--pour récupérer le nom de la catégorie pour la jointure --}}
                        <td>{{ $post->price }}</td>
                        <td>
                            <a href="{{--route('admin.posts.show', $post->id)--}}" class="lire btn btn-sm btn-info">Voir</a>
                        </td>
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
                            <form action="{{--route('admin.posts.published', $post->id)--}}" method="POST">
                                @csrf
                                @method('put')
                                <div class="custom-control custom-switch">
                                     <input type="checkbox" {{ $post->published ==1 ? 'checked' : ''}}  name="published_input" class="custom-control-input" id="switch-{{$post->id}}" onchange="this.form.submit()">
                                     <label class="custom-control-label" for="switch-{{ $post->id}}"></label>
                                 </div>
                             </form>
                        </td>
                            
                        <td>
                            <a href="{{--route('admin.posts.edit', $post->id)--}}" class="modifier btn btn-sm btn-secondary">Modifier</a>
                            <form action="{{--route('admin.posts.trashed', $post->id)--}}" method="POST" class="d-inline">
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