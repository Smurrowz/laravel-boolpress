@extends('layouts.app')
@section('content')
    <div class="container ">
        <div>
          <div class="col-12 d-flex justify-content-around align-items-center">
            <h1>Posts :</h1>
            <a class="btn btn-secondary" href="{{route('admin.posts.create')}}" role="button">Nuovo Post</a>
          </div>
          <div class="col-12">
            <table class="table table-dark table-striped ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titolo</th>
                  <th scope="col">Slug</th>
                  <th scope="col">Creato il</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                <tr>
                  <th scope="row">{{$post['id']}}</th>
                  <td>{{$post['title']}}</td>
                  <td>{{$post['slug']}}</td>
                  <td>{{$post['created_at']}}</td>
                  <td><th scope="col"><a class="btn btn-primary" href="{{route('admin.posts.show', $post)}}" role="button">Vedi</a></th> 
                  <td><th scope="col"><a class="btn btn-success" href="{{route('admin.posts.edit', $post)}}" role="button">Modifica</a></th>                   
                  <td><th scope="col">
                    <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="! CANCELLA !" class="btn btn-danger">
                    </form>
                  </th></td>
                </tr>
                    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    @endsection
