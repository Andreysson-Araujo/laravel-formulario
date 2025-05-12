@extends('layouts.main')

@section('title', 'Responder Questionário')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center">
    <form action="{{ route('formularios.store') }}" method="POST">
        @csrf

        <!-- Campo Oculto com ID do Servidor -->
        <input type="hidden" name="servidores_id" value="{{ request('servidor_id') }}">

        <!-- Pergunta -->
        <div class="mb-3">
            <label class="question" for="Resposta">
                Quanto às capacitações fornecidas pela OCA e sua aplicação na rotina de trabalho. Como você se sente?
            </label>

            <div class="check-control">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resposta[]" value="legal" id="opcao1">
                    <label class="form-check-label" for="opcao1">Muito Satisfeito</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resposta[]" value="mais ou menos" id="opcao2">
                    <label class="form-check-label" for="opcao2">Satisfeito</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resposta[]" value="ah" id="opcao3">
                    <label class="form-check-label" for="opcao3">Pouco satisfeito</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resposta[]" value="chato" id="opcao4">
                    <label class="form-check-label" for="opcao4">Insatisfeito</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Enviar Resposta</button>
    </form>
</div>
@endsection
