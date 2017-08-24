@extends('produtos.cabecalho')
@section('conteudo')

    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <ul>
                <li> {{ $error }} </li>
            </ul>
        </div>
    @endforeach
    <form enctype="multipart/form-data" class="form-horizontal" role="form"
          action="{{ action('ProdutoController@store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" type="text" value="{{ old('nome') }}" class="form-control">
        </div>
        <div class="form-group">
            <label>valor: </label>
            <input name="valor" type="number" value="{{ old('valor') }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Descrioção</label>
            <textarea name="descricao" value="{{ old('descricao') }}" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Tamanho</label>
            <input name="tamanho" type="text" value="{{ old('tamanho') }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Categoria</label>
            <select name="categoria_id" class="form-control">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}"> {{ $categoria->nome  }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Envie
            </label>
            <input name="foto" id="foto" type="file" accept="image/*" class="form-control">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input name="quantidade" type="number" value="{{ old('quantidade') }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@stop