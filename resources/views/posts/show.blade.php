@extends('layouts.app')

@section('content')
    
<h1>Detalhes do {{$post->title}}</h1>
<div>
    {{$post->body}}
</div>

@include('posts.comments.comment')

@endsection