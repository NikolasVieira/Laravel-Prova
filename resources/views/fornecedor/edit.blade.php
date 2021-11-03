<form action="{{route('fornecedor.update', $fornecedor->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h3>EDITANDO {{ $fornecedor->nome }}</h3>
    <hr />
    <a href="{{ route('fornecedor.index') }}">Voltar</a>

    <label for="nome">Nome da fornecedor</label>
    <input type="text" id="nome" name="nome" value="{{$fornecedor->nome}}">
    <label for="estado">Estado da fornecedor</label>
    <input type="text" id="estado" name="estado" value="{{$fornecedor->estado}}">
    <label for="endereco">EndereÇo da fornecedor</label>
    <input type="text" id="endereco" name="endereco" value="{{$fornecedor->endereco}}">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
