@extends('layouts.app')

@section('content')
<h1>Lista de Servidores</h1>
<a href="{{ route('servidores.create') }}">Adicionar Novo Servidor</a>
<ul>
    @foreach ($servidores as $servidor)
        <li>{{ $servidor->nome }} - <a href="{{ route('servidores.show', $servidor->id) }}">Ver</a></li>
    @endforeach
</ul>
@endsection
