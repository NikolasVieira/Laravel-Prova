<form action="{{route('tributacao.update', $tributacao->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h3>EDITANDO {{ $tributacao->tipo }}</h3>
    <hr />
    <a href="{{ route('tributacao.index') }}">Voltar</a>

    <input type="text" id="tipo" name="tipo" value="{{$fornecedor->tipo}}">
    <input type="text" id="valor" name="valor" value="{{$tributacao->valor}}">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
