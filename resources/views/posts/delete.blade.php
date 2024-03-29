@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('posts.destroy', $post->id) }}">
    @method('DELETE')
    @csrf
    <h1 class=title>{{$post->title}}</h1>
    <div class="title mb-4">
        {{$post->body}}
    </div>
    @if ($post->user_id == auth()->user()->id) 
        <div> 
            <button type="submit" class="btn btn-danger">Deletar</button> 
        </div>
    @endif
    

    
</form>


@endsection