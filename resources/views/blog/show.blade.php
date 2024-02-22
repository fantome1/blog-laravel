@extends('base')

@section('title','Informations sur l\'article')

@section('content')

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->description }}</p>

@endSection()
