@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @method('put')
    @csrf
    <h1>{{$post->title}}</h1>
    <div class="mb-4">
        {{$post->body}}
    </div>  

    <div class="form-group">
        <input type="text" name="title" placeholder="Novo título" class="form-control">
    </div>

    <div class="form-group">
        <textarea name="body" cols="30" rows="5" placeholder="Novo texto" class="form-control"></textarea>
    </div>

    @if ($post->user_id == auth()->user()->id) 
        <div> 
            <button type="submit" class="btn btn-success">Editar</button> 
        </div>
    @endif 
    
</form>


@endsection