@extends('layouts.main')
@section('title', 'Coleta de dados')
@section('content')
<div id="content">
    <h1>Ola Servidor</h1>
<form id="content" action="{{ route('servidores.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Qual é seu nome:</label>
        <input type="text" name="nome" required>
    </div>
    <div class="mb-3">
        <label>Você é um:</label>
        <input type="number" name="nivel_id" required>
    </div>
    <div>
        <label>Qual orgão você pertence:</label>
        <input type="number" name="orgao_id" required>
    </div>
    <button  type="submit">prosseguir</button>
</form>
</div>

@endsection
