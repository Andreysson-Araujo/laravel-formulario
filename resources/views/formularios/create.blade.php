@extends('layouts.main')

@section('title', 'Responder Questionário')

@section('content')

<form action="{{ route('formularios.store') }}" method="POST">
    @csrf

    <!-- Campo Oculto para armazenar o ID do servidor -->
    <input type="hidden" name="servidor_id" value="{{ request('servidor_id') }}">

    <div class="mb-3">
        <label class="question" for="resposta">Aqui nessa instituição o que se pode melhorar?</label>
        <textarea name="resposta" id="resposta" required class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="marcado_como" class="question">Voce deseja marcar isso como:</label>
        <select name="" id="">
            <option value="Sugestão">Sugestão</option>
            <option value="Elogio">Elogio</option>
            <option value="Reclamação">Reclamação</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Enviar Resposta</button>
</form>

@endsection
