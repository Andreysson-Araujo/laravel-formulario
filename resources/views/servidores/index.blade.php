@extends('layouts.main')

@section('content')
@section('title', 'Boas Vindas')
<div class="container">
    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <div class="card shadow-lg p-5 text-center" style="border-radius: 15px; max-width: 600px;">
            <h1 class="mb-3">👋 Bem-vindo, Agente Público!</h1>
            <p class="text-muted mb-4">
                Estamos prontos para ouvir você.<br>
                Clique no botão abaixo para iniciar seu questionário.
            </p>
            <a id="op" class="btn btn-success btn-lg px-4" href="{{ route('servidores.create') }}">
                <i class="bi bi-clipboard-check"></i> Responder Questionário
            </a>
        </div>
    </div>


@endsection
