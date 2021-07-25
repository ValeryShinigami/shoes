@extends('admin.template')

@section('summernote')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@section('h1','Nouvel article')
    
@section('mycontent')

<div class="container">
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data"> {{-- tjrs ajouter le enctype !!! pour le file --}}
    @csrf
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}"> {{-- value= old() permet de garder les anciennes données --}}
        <div class="text-danger">{{ $errors->first('title', ':message') }}</div>
    </div>

    <div class="form-group">
        <label for="homme_id">Marque</label>
        <select name="homme_id" id="homme_id" class="form-control" >
            <option selected disabled> --- </option> {{-- pour avoir le trait non cliquable --}}
            @foreach ($hommes as $homme)
                <option value="{{ $homme->id }}">{{ $homme->name }}</option> {{-- --}}
            @endforeach
        </select>
        <div class="text-danger">{{ $errors->first('homme_id', ':message') }}</div>
    </div>
    <div class="form-group">
        <label for="price">Prix</label>
        <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}"> {{-- value= old() permet de garder les anciennes données --}}
        <div class="text-danger">{{ $errors->first('price', ':message') }}</div>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control-file" id="image">
        <div class="text-danger">{{ $errors->first('image', ':message') }}</div>
    </div>

    <div class="form-group">
        <label for="content">Contenu</label>
        <textarea name="content" id="content" class="form-control" rows="10">{{old('content')}}</textarea>
        <script>
            $('#content').summernote({
              placeholder: 'Bonne rédaction',
              tabsize: 2,
              height: 100
            });
          </script>
        <div class="text-danger">{{ $errors->first('content', ':message') }}</div>
    </div>

    <div class="form-group text-center">
       <input type="submit" class=" sauv btn btn-primary" value="sauvegarder">
    </div>

    </form>
</div>


@endsection
