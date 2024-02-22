@extends('base')

@section('title','Accueil')

@section('content')
<h1>Mon Blog</h1>
@foreach($posts as $post)
<article>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->description }}</p>
</article>

<p>
    <a href="{{route('blog.show', ['post' => $post]) }}" class="btn btn-primary">Lire la suite</a>
</p>

@endforeach

{{ $posts->links() }}

@endSection()
