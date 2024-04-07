@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Modifica Progetto</h3>
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            value="{{ $project->name }}" required>
          </div>
          <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ $project->description }}</textarea>
          </div>

          <div class="form-group">
            <label for="link">Link</label>
            <input type="url" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
              value="{{ $project->link }}" required>
          </div>

          <div class="form-group">
            <label for="types_id" class="form-label">Tipo</label>
            <select class="form-select" id="types_id" name="types_id">
            <option value="1">FrontEnd</option>
            <option value="2">BackEnd</option>
            <option value="3">FullStack</option>
            </select>
          </div>
          <button type="submit" class="btn mt-3 btn-primary">Modifica</button>
        </form>
      </div>
    </div>
  </div>
@endsection

@if ($errors->any())
<div class="alert alert-danger">
  <h4>Correggi i seguenti errori per proseguire: </h4>
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif