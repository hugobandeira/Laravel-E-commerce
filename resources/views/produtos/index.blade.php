@extends('produtos.cabecalho')
@section('conteudo')
    @if(empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>
    @else

        @foreach ($produtos as $p)
            <div class="col-sm-6 col-md-4">
                {{--<div class="col-lg-3">--}}
                {{--class="thumbnail"--}}
                <div>
                    <img src="{{ $p->foto }}" alt="" width="210" height="130">
                    <div class="caption">
                        <h1>{{ $p->nome }}</h1>
                        <p>valor: {{ $p->valor }} </p>
                        <p>Descrição: {{ $p->descricao }}</p>
                        <p>Quantidade: {{ $p->quantidade }}</p>
                        <p>Tamanho: {{ $p->tamanho }}</p>
                        <p>Categoria: {{ $p->categoria->nome }}</p>
                        <div class="icon">
                                <span>
                                    <button class="btn">
                                        <a href="{{ action('ProdutoController@edit', $p->id ) }}"
                                           class="glyphicon glyphicon-edit"></a>
                                    </button>
                                </span>
                            <span>
                                    <button class="btn">
                                        <a href="{{ action('ProdutoController@show', $p->id) }}" class="fa fa-plus"></a>
                                    </button>
                                </span>
                            <span>

                                {{--<form action="{{ action('ProdutoController@destroy', ['id'=>$p->id] ) }}"--}}
                                {{--method="post">--}}
                                {{--<button type="submit" class="btn">--}}
                                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                {{--<input type="hidden" name="_method" value="DELETE">--}}
                                {{--<a class="glyphicon glyphicon-remove"></a>--}}
                                {{--</button>--}}
                                {{--</form>--}}
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    @if(old('nome'))
        <h4>
            <span class="alert alert-success">
                <strong>Sucesso!</strong> O produto {{ old('nome') }} Adicionado com Sucesso!
            </span>
        </h4>
    @endif
    <div>

        <h4>
        <span class="label label-danger pull-right">
            Um ou menos itens no estoque
        </span>
        </h4>

    </div>
@stop



{{--<tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">--}}
{{--<td>Nome: {{ $p->nome }}</td>--}}
{{--<td>valor: {{ $p->valor }} </td>--}}
{{--<td>Descrição: {{ $p->descricao }}</td>--}}
{{--<td>quantidade: {{ $p->quantidade }}</td>--}}
{{--<td>Tamanho: {{ $p->tamanho }}</td>--}}
{{--<td>Categoria: {{ $p->categoria->nome }}</td>--}}
{{--<td>--}}
{{--<a href="{{ action('ProdutoController@edit', $p->id ) }}" class="fa fa-edit"></a>--}}
{{--</td>--}}
{{--<td>--}}
{{--<a href="{{ action('ProdutoController@show', [ 'id'=> $p->id ]) }}"--}}
{{--class="glyphicon glyphicon-plus">--}}
{{--</a>--}}
{{--</td>--}}
{{--<td>--}}
{{--<a href="#" class="glyphicon glyphicon-remove"></a>--}}
{{--</td>--}}
{{--</tr>--}}