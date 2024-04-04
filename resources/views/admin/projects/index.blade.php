@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
  <section>
    <div class="container py-4">
      <a href="{{ route('admin.projects.create') }}"> Inserisci nuovo progetto </a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Tipo</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                {{-- <td>{{ $project->type }}</td> --}}
            </tr> 
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
@endsection