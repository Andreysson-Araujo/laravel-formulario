@extends('layouts.main')

@section('title', 'Responder Questionário')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center py-5">
    <form action="{{ route('formulario.store') }}" method="POST" class="w-75">
        @csrf

        <input type="hidden" name="servidores_id" value="{{ $servidor_id }}">

        {{-- LOOP DINÂMICO DE PERGUNTAS DO BANCO --}}
        @foreach($perguntas as $index => $pergunta)
            @php 
                // Cria o nome 'answer_1', 'answer_2', etc. com base na posição
                $nomeCampo = 'answer_' . ($index + 1); 
            @endphp

            <div class="mb-4 p-3 border rounded bg-light shadow-sm">
                <label class="question d-block mb-3 font-weight-bold">
                    {{ $index + 1 }}. {{ $pergunta->texto_pergunta }}
                </label>

                {{-- Verifica se é a pergunta 6 (que você fez com Sim/Não no exemplo) --}}
                @if($index + 1 == 6)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $nomeCampo }}" value="Sim" id="{{ $nomeCampo }}Sim" required>
                        <label class="form-check-label" for="{{ $nomeCampo }}Sim">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $nomeCampo }}" value="Não" id="{{ $nomeCampo }}Nao">
                        <label class="form-check-label" for="{{ $nomeCampo }}Nao">Não</label>
                    </div>
                @else
                    {{-- Usa o componente de rádio padrão para as outras perguntas --}}
                    @include('formularios.radio-options', ['name' => $nomeCampo])
                @endif
            </div>
        @endforeach

        <hr class="my-5">

        <div class="mb-4">
            <label for="classificate" class="font-weight-bold">Dê uma nota geral para sua satisfação (0 a 10):</label>
            <input type="number" class="form-control" name="classificate" min="0" max="10" required>
        </div>

        <div class="mb-4">
            <label for="suggestions" class="font-weight-bold">Sugestões ou comentários:</label>
            <textarea name="suggestions" class="form-control" rows="4" maxlength="1000" placeholder="Sua opinião é muito importante para nós..."></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg px-5">Enviar Respostas</button>
        </div>
    </form>
</div>
@endsection