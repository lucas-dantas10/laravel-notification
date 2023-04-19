@extends('layouts.app')

@if (auth()->check())

@section('content')

<h1 class="mb-4 title">Criar Post</h1>
<form action="{{route('posts.store')}}" class="form" method="POST">
    @csrf
    <input type="hidden" name="post_id">
    <div class="form-group">
        <input type="text" name="title" placeholder="Titulo do post" class="form-control">
    </div>

    <div class="form-group">
        <textarea name="body" cols="30" rows="5" placeholder="Descrição do post" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>

@endif
@endsection