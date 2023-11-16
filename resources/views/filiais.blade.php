@extends('principal')
{{-- @section('titulo', 'Filiais') --}}

@section ('titulo')
Filiais
@stop

@section('conteudo')
    <h1>Título da postagem</h1>
    <x-alert type="danger" message="Usuário e/ou senha inválidos!"/>
    <x-alert type="success" message="Cadastro realizado com sucesso!"/>
    <ul>
        <li>SP</li>
        <li>RJ</li>
        <li>MG</li>
    </ul>
@stop