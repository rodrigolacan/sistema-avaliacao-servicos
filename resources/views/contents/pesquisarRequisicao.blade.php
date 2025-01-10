@extends('layout.app')

@section('pesquisarRequisicao-body')
        <x-util.search-bar method="POST" action="/custom-search" /> <!-- Barra com largura ajustada -->

@endsection
