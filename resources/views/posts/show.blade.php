@extends('layouts.app')

@section('content')
    
<h1 class="title">Detalhes do {{$post->title}}</h1>
<div class="title">
    {{$post->body}}
</div>

@include('posts.comments.comment')

@endsection