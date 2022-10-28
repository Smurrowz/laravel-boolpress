@extends('layouts.app')
{{-- @dd($post->cover); --}}
@section('content')
    <div class="container ">
        @if($post->cover) 
            <div class="col-12">
                <img src="{{asset('Storage/'.$post->cover)}}" width="400" alt="">
            </div>
        @endif
        <h1 class="text-primary text-center">{{ $post['title'] }}</h1>
        <h4 class="text-secondary text-center">{{ $post['slug'] }}</h4>
        <div class="d-flex justify-content-around m-4">
            <p>Creato il: {{ $post['created_at'] }} </p>
            <p>Modificato il: {{ $post['updated_at'] }}</p>
            <p>Categoria: {{ $post->category ? $post->category->name : 'nessuna categoria' }}</p>
            <p>Tags:
                @foreach ($post->tags as $tag)
                    {{ $tag->name }}
                    @if (!$loop->last)
                        -
                    @endif
                @endforeach
            </p>
        </div>
        <p>
            {{ $post['content'] }}
        </p>
        <div class="text-center d-flex justify-content-around">
            <a class="btn btn-success" href="{{ route('admin.posts.edit', $post) }}" role="button">Modifica</a>
            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="! CANCELLA !" class="btn btn-danger">
            </form>
        </div>
    </div>
    <div class="container mt-4 ">
        <div class="row">
            <div class="col-12">
                @if ($post->category)
                    @foreach ($post->category->posts()->where('id','!=',$post->id)->get() as $relatedPost)
                        <p>Post numero :{{ $relatedPost->id }} - 
                        <a href="{{ route('admin.posts.show', $relatedPost) }}">{{$relatedPost->title}}</a></p>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
