@extends('user.base')

@section('title','Create User')

@section('name_page', 'Adicionar Usuario')

@section('container')
    <form action="/user/add" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email">
        <input type="password" name="password" placeholder="Digite sua Senha">
        <input type="password" name="password_confirmation" placeholder="Digite sua Senha Novamente">
        <input type="submit" value="Submit">
    </form>
@endsection