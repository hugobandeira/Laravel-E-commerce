@extends('produtos.cabecalho')
@section('conteudo')

    <form enctype="multipart/form-data" action="{{ action('ProdutoController@update', ['id'=> $p->id ]) }}"
          method="post">
        <h2>Você está editando o item {{ $p->nome }}</h2>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" type="text" value="{{ $p->nome }}" class="form-control">
        </div>
        <div class="form-group">
            <label>valor: </label>
            <input name="valor" type="number" value="{{ $p->valor }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Descrioção</label>
            <textarea name="descricao" class="form-control">{{ $p->descricao }}</textarea>
        </div>
        <div class="form-group">
            <label>Tamanho:</label>
            <input name="tamanho" type="text" value="{{ $p->tamanho }}" class="form-control">
        </div>
        <div>
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
            <input name="foto" id="foto" type="file" value="{{ $p->foto }}" accept="image/*" class="form-control">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input name="quantidade" type="number" value="{{ $p->quantidade }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@stop