@extends('layouts.main')

@section('title', 'Coleta de Dados')

@section('content')

<form action="{{ route('servidores.store') }}" class="serv-form" method="POST">
    @csrf
    
    <!-- Campo para o Nome -->
    <div class="mb-3">
        <label for="nome">Qual é seu nome:</label>
        <input type="text" name="nome" id="nome" required class="form-control">
    </div>

   
    <div class="mb-3">
        <label for="nivel_id">Você é um:</label>
        <select name="nivel_id" id="nivel_id" required class="form-control">
            <option value="" disabled selected>Selecione o Nível</option>
            @foreach($niveis as $nivel)
                <option value="{{ $nivel->id }}">{{ $nivel->nivel }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="mb-3">
        <label for="central_id">Qual central você pertence:</label>
        <select name="central_id" id="central_id" class="form-control">
            <option value="" disabled selected>Selecione a Central</option>
            @foreach($centrais as $central)
                <option value="{{$central->id}}">{{$central->nome}}</option>
            @endforeach
        </select>
    </div>

    <!-- Campo para Órgão (Select) -->
    <div class="mb-3">
        <label for="orgao_id">Qual órgão você pertence:</label>
        <select name="orgao_id" id="orgao_id" required class="form-control">
            <option value="" disabled selected>Selecione o Órgão</option>
            @foreach($orgaos as $orgao)
                <option value="{{ $orgao->id }}">{{ $orgao->nome }}</option>
            @endforeach
        </select>
    </div>

    <!-- Botão para enviar o formulário -->
    <button type="submit" class="btn btn-primary">Prosseguir</button>
</form>
@endsection
