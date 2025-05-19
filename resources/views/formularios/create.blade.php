@extends('layouts.main')

@section('title', 'Responder Questionário')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center">
    <form action="{{ route('formularios.store') }}" method="POST" class="w-75">
        @csrf

        <!-- Campo Oculto com ID do Servidor -->
        <input type="hidden" name="servidores_id" value="{{ request('servidor_id') }}">

        <!-- Pergunta 1 -->
        <div class="mb-4">
            <label class="question">1. Quanto às capacitações fornecidas pela OCA e sua aplicação na rotina de trabalho. Como você se sente?</label>
            @include('formularios.radio-options', ['name' => 'answer_1'])
        </div>

        <!-- Pergunta 2 -->
        <div class="mb-4">
            <label class="question">2. Como você avalia o papel do seu lider ?</label>
            @include('formularios.radio-options', ['name' => 'answer_2'])
        </div>

        <!-- Pergunta 3 -->
        <div class="mb-4">
            <label class="question">3. Como você avalia a qualidade da comunicação com sua equipe e liderança no dia de trabalho?</label>
            @include('formularios.radio-options', ['name' => 'answer_3'])
        </div>

        <!-- Pergunta 4 -->
        <div class="mb-4">
            <label class="question">4. Como você avalia o ambiente de trabalho da OCA, considerando a infraestrutura, o acolhimento instituconal, os valores da organização, e as relações interpressoais ?</label>
            @include('formularios.radio-options', ['name' => 'answer_4'])
        </div>

        <!-- Pergunta 5 -->
        <div class="mb-4">
            <label class="question">5. Em relação as ações promovidas para o bem-estar e qualidade de vida no trabalho. Como você se sente ?</label>
            @include('formularios.radio-options', ['name' => 'answer_5'])
        </div>
        <div class="mb-4">
            <label class="question">6. Você faltou alguma das últimas 3 capacitações?</label>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="faltou_capacitacoes" value="Sim" id="faltouSim" required>
                <label class="form-check-label" for="faltouSim">Sim</label>
            </div>
        
            <div class="form-check">
                <input class="form-check-input" type="radio" name="faltou_capacitacoes" value="Não" id="faltouNao">
                <label class="form-check-label" for="faltouNao">Não</label>
            </div>
        </div>
        

        <!-- Classificação -->
        <div class="mb-4">
            <label for="classificate">Dê uma nota geral para sua satisfação (0 a 10):</label>
            <input type="number" class="form-control" name="classificate" min="0" max="10" required>
        </div>

        <!-- Sugestões -->
        <div class="mb-4">
            <label for="suggestions">Sugestões ou comentários:</label>
            <textarea name="suggestions" class="class-control" rows="4" maxlength="1000"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Enviar Respostas</button>
    </form>
</div>
@endsection
