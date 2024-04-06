@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <strong>Nome: </strong> {{ $project->name }} <br />
        <strong>Tipo: </strong> {{ $project->types_id }} <br />
        <strong>Descrizione:</strong> {{ $project->description }} <br />
        <strong>Link:</strong> <a href="{{ $project->link }}">{{ $project->link }} </a><br />
    </section>
@endsection