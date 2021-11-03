<form action="{{route('categoria.update', $categoria->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h3>EDITANDO {{ $categoria->categoria_nome }}</h3>
    <hr />
    <a href="{{ route('categoria.index') }}">Voltar</a>

    <label for="categoria_nome">Nome da Categoria</label>
    <input type="text" id="categoria_nome" name="categoria_nome" value="{{$categoria->categoria_nome}}">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
