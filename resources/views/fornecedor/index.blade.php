<h3>Fornecedor</h3>
<a href="{{ route('fornecedor.create') }}">Novo</a>
@if(count($fornecedor)>0)
<ul>
    @foreach ($fornecedor as $f)
    <li>
        {{ $f['id'] }} | {{ $f['nome'] }} | {{ $f['estado'] }} | {{ $f['descricao'] }}
        <a href="{{ route('fornecedor.show', $f['id']) }}">Detalhes</a>
        <a href="{{ route('fornecedor.edit', $f['id']) }}">Alterar</a>
    </li>
    @endforeach

</ul>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif
