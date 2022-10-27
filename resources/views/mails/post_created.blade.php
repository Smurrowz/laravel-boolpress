{{-- <label for="">titolo del nuovo post</label>
<h1>
  <a href="{{route('admin.posts.show',$post)}}">

    {{$post->title}}
  </a>
</h1> --}}
@component('mail::message')
# Nuovo post
 
Congrats! new post created
 
@component('mail::button', ['url' => route('admin.posts.show', $post) ])
{{ $post->title }}
@endcomponent
 
Thanks,<br>
{{ config('app.name') }}
@endcomponent