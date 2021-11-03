<h3>tributação</h3>
<a href="{{ route('tributacao.create') }}">Novo</a>
@if(count($tributacao)>0)
<ul>
    @foreach ($tributacao as $t)
    <li>
        {{ $t['id'] }} | {{ $t['tipo'] }} | {{ $t['valor'] }}
        <a href="{{ route('tributacao.show', $t['id']) }}">Detalhes</a>
        <a href="{{ route('tributacao.edit', $t['id']) }}">Alterar</a>
    </li>
        @foreach ($t->produtos as $p)
            <li>
                {{ $p['nome'] }}
            </li>
        @endforeach
    @endforeach

</ul>
@else
    <h3>Não existem tributacaoes cadastrados</h3>
@endif
