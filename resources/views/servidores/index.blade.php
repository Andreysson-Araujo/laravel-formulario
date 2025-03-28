@extends('layouts.main')

@section('content')

<div class="container">
<h1>Ola Servidor</h1>
    <a id="op" href="{{ route('servidores.create') }}">Responder questionario</a>
</div>


@endsection
