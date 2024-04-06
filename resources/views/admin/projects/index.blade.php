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
            {{-- <th scope="col">Tipo</th> --}}
            <th scope="col">Link</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                {{-- <td>{{ $project->type }}</td> --}}
                <td><a href="{{ $project->link }}"></a>{{ $project->link }}</td>
                <td><a href="{{ route('admin.projects.show', $project ),}}"><i class="fa-solid fa-eye"></i></a></td>
                <td><a href="{{ route('admin.projects.edit', $project ) }}"><i class="fa-solid fa-pencil"></i></a></td>
                <td><a href="{{ route('admin.projects.destroy', $project) }}"><i class="fa-solid fa-dumpster"></i></a></td>
            </tr> 
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@endsection