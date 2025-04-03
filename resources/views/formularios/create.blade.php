@extends('layouts.main')

@section('title', 'Responder Questionário')

@section('content')

<form action="{{ route('formularios.store') }}" method="POST">
    @csrf

    <!-- Campo Oculto para armazenar o ID do servidor -->
    <input type="hidden" name="servidores_id" value="{{ request('servidor_id') }}">

    <!-- Pergunta -->
    <div class="mb-3">
        <label for="resposta">Aqui nessa instituição, o que se pode melhorar?</label>
        <textarea name="resposta" id="resposta" required class="form-control"></textarea>
    </div>

    <!-- Marcar como -->
    <div class="mb-3">
        <label for="marcado_como">Você deseja marcar isso como:</label>
        <select name="marcado_como" id="marcado_como" class="form-control">
            <option value="Sugestão">Sugestão</option>
            <option value="Elogio">Elogio</option>
            <option value="Reclamação">Reclamação</option>
        </select>
    </div>

    <!-- Botão para Enviar -->
    <button type="submit" class="btn btn-success">Enviar Resposta</button>
</form>

@endsection
