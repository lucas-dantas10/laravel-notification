@extends('layouts.app')

@section('content')

<h1>Listagem dos Posts</h1>

@forelse ($posts as $post)
    <a href="{{route('posts.show', $post->id)}}">
        {{$post->title}}
    </a>
    <hr>
@empty
<p>Nenhum Post Cadastrado</p>
    
@endforelse

{!! $posts->links() !!}
    
@endsection