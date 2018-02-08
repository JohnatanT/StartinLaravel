@extends('user.base')

@section('title','List User')

@section('name_page','Lista de Usuario')

@section('container')
    <ul>
        @foreach(['item1','item2','item3','item4'] as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endsection