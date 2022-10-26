@extends('layouts.app')
@section('content')
    <h1 class="text-center"> Crea un nuovo post</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}"
                placeholder="Inserisci il titolo">
        </div>

        <div class="form-group">
            <label for="image">Upload</label>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>

        <select name="category_id" class="form-control col-3 mb-3">
            <option selected>Seleziona Categoria</option>
            <option value="">--nessuna--</option>
            @foreach ($categories as $category)
                <option @if (old('category_id') === $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}
                </option>
            @endforeach
        </select>
        <div class="form-group mb-3">
            @foreach ($tags as $tag)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="tags[]" type="checkbox" id="tag-{{ $tag->id }}"
                        value="{{ $tag->id }}">
                    <label class="form-check-label" for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
                </div>
            @endforeach
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto:</label>
            <textarea class="form-control" id="content" placeholder="Inserisci il contenuto del post" name="content"
                rows="20">{{ old('content') }}</textarea>
        </div>
        <div class="d-flex justify-content-center">

            <input type="submit" class="btn btn-success" role="button" value="Salva Modifiche">
        </div>

    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
