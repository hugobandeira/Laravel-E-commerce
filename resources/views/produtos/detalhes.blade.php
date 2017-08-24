@extends('produtos.cabecalho')
@section('conteudo')
    <h1>Detalhes do Produtos {{ $p->nome }}</h1>
    <ul>
        <li> Descrição do produto: {{ $p->descricao }} </li>
    </ul>
    <image height="320" src="{{ $p->foto }}" width="680"></image>
    {{--<img src="{{ $p->foto }}">--}}

@stop