@extends('admin.template')

@section('h1', 'Liste des marques')

@section('mycontent')


@if (session('success'))
    <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
        {{!! session('warning') !!}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    

    <div class="d-flex justify-content-end align-items-center">
        <a href="{{route('admin.hommes.create')}}" class="btn btn-secondary">Nouvelle Catégorie</a>
    </div>

    <div class="table-responsive">
        <table class="text-center table table-striped table-hover">
            <thead class="">
                <tr>
                    <th>Marques</th>
                    <th>Date de création</th>
                    <th>Date de modification</th>
                    <th>Paramètres</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hommes as $homme)
                    <tr>
                        <td>{{ $homme->name}}</td>
                        <td>{{ $homme->created_at}}</td>
                        <td>{{ $homme->updated_at}}</td>
                        <td>
                            <a href="{{--route('admin.hommes.edit', $homme->id)--}}" class="btn btn-sm btn-secondary">Modifier</a>
                            <form action="{{--route('admin.hommes.delete', $category->id)--}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <input type="submit" value="supprimer" class="btn btn-sm btn-danger" onclick="return confirm('confirmer la suppression ?')">
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{--<div class="d-flex justify-content-center align-items-center">
        {{ $categories->links() }} {{-- ajouter les boutons de pagination --}}
    {{--</div>--}}
@endsection





