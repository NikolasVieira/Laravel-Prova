<h2>ADICIONAR PRODUTO</h2>
<hr />
<a href="{{ route('produto.index') }}">Voltar</a>

<form action="{{ route('produto.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" id="descricao" name="descricao" placeholder="Descrição do Produto">
    <input type="number" id="preco" name="preco" placeholder="Preço do produto">
    <select id="fornecedor_id" name="fornecedor_id">
        <option>selecione</option>
        @foreach ($fornecedor as $fornecedores)
        <option value="{{ $fornecedores->id }}">{{ $fornecedores->nome }}</option>
        @endforeach
    </select>
    <select id="tributacao_id" name="tributacao_id">
        <option>selecione</option>
        @foreach ($tributacao as $tributacoes)
        <option value="{{ $tributacoes->id }}">{{ $tributacoes->tipo }}</option>
        @endforeach
    </select>

    <button type="submit">Adicionar</button>
</form>
