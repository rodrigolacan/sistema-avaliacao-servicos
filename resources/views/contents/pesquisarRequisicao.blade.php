@extends('layout.app')

@section('pesquisarRequisicao-body')
        <x-util.search-bar method="GET" action="/search/requisicao" />
@endsection
