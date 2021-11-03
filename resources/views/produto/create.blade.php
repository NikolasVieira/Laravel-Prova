<h2>ADICIONAR PRODUTO</h2>
<hr />
<a href="{{ route('produto.index') }}">Voltar</a>

<form action="{{ route('produto.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" id="produto_nome" name="produto_nome" placeholder="Nome da produto">
    <input type="number" id="preco" name="preco" placeholder="Preço do produto">
    <input type="number" id="estoque" name="estoque" placeholder="Estoque do produto">
    <select id="categoria_id" name="categoria_id">
        <option>selecione</option>
        @foreach ($categoria as $categorias)
        <option value="{{ $categorias->id }}">{{ $categorias->categoria_nome }}</option>
        @endforeach
    </select>

    <button type="submit">Adicionar</button>
</form>
