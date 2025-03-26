@extends('layouts.app')

@section('content')
<h1>Adicionar Servidor</h1>
<form action="{{ route('servidores.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome" required>
    
    <label>Nível ID:</label>
    <input type="number" name="nivel_id" required>
    
    <label>Órgão ID:</label>
    <input type="number" name="orgao_id" required>

    <button type="submit">Salvar</button>
</form>
@endsection
