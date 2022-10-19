@extends('layouts.app')
@section('content')
<div class="container ">
  <h1 class="text-primary text-center">{{$post['title']}}</h1>
  <h4 class="text-secondary text-center">{{$post['slug']}}</h4>
  <div class="d-flex justify-content-around m-4" >
    <p>Creato il: {{$post['created_at']}} </p>
    <p>Modificato il: {{$post['updated_at']}}</p>
  </div>
  <p>
    {{$post['content']}}
  </p>
  <div class="text-center d-flex justify-content-around">
    <a class="btn btn-success" href="{{route('admin.posts.edit', $post)}}" role="button">Modifica</a>
    <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" value="! CANCELLA !" class="btn btn-danger">
    </form>
  </div>
</div>
@endsection