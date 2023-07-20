@extends('layouts.app')

@section('content')
    <h1>Dettaglio Progetto</h1>
    <p><strong>Nome: </strong>{{ $project->name }}</p>
    <p><strong>Descrizione: </strong>{{ $project->description }}</p>
    <p><strong>Cliente: </strong>{{ $project->client }}</p>
    <p><strong>Data di Inizio: </strong>{{ $project->start_date }}</p>
@endsection