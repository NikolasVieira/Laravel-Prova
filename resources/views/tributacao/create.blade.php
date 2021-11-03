<h2>ADICIONAR TRIBUTAÇÃO</h2>
<hr />
<a href="{{ route('tributacao.index') }}">Voltar</a>

<form action="{{ route('tributacao.store') }}" method="POST">
    @csrf
    <input type="text" id="tipo" name="tipo" placeholder="Tipo de Tributação">
    <input type="text" id="valor" name="valor" placeholder="Valor do Tributação">

    <button type="submit">Adicionar</button>
</form>
