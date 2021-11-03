<h2>ADICIONAR FORNECEDOR</h2>
<hr />
<a href="{{ route('fornecedor.index') }}">Voltar</a>

<form action="{{ route('fornecedor.store') }}" method="POST">
    @csrf
    <input type="text" id="nome" name="nome" placeholder="Nome do fornecedor">
    <input type="text" id="estado" name="estado" placeholder="Estado do fornecedor">
    <input type="text" id="endereco" name="endereco" placeholder="EndereÇo do fornecedor">

    <button type="submit">Adicionar</button>
</form>
