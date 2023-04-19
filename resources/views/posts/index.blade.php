@extends('layouts.app')

@section('content')

<div class="post d-flex align-items-center justify-content-between mb-3">
    <h1 class="title">Listagem dos Posts</h1>

    <a class="btn btn-primary" href="{{route('posts.create')}}">Criar Post</a>
</div>


@forelse ($posts as $post)

<div class="posted d-flex align-items-center justify-content-between">
    <a class="link-comment" href="{{route('posts.show', $post->id)}}">
        {{$post->title}} ({{ $post->comments->count() }})
    </a>

    @if ($post->user_id == auth()->user()->id) 
        <div>
            <a href="{{ route('posts.delete', $post->id) }}" class="btn btn-danger">Deletar</a>  
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Editar</a>
        </div>
    @endif
    
</div>
<hr>
    
@empty
    <p>Nenhum Post Cadastrado</p>
    
@endforelse

{!! $posts->links() !!}
    
@endsection