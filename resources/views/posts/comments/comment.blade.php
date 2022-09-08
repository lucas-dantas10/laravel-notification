<hr>
@if (auth()->check())
<form action="{{route('comment.store')}}" class="form" method="POST">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <div class="form-group">
        <input type="text" name="title" placeholder="Titulo" class="form-control">
    </div>

    <div class="form-group">
        <textarea name="body" cols="30" rows="5" placeholder="Comentário" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
@else 
    <p>Precisa estar logado para fazer os comentários. <a href="{{route('login')}}">Clique aqui para logar</a></p>
@endif