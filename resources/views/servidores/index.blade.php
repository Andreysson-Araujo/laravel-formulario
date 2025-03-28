@extends('layouts.main')

@section('content')
@section('title', 'Boas Vindas')
<div class="container">
<h1>Ola Servidor</h1>
    <a id="op" href="{{ route('servidores.create') }}">Responder questionario</a>
</div>


@endsection
