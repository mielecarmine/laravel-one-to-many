@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
    
        <label for="types_id" class="form-label">Tipo</label>
        <select class="form-select" id="types_id" name="types_id">
            <option value="1">FrontEnd</option>
            <option value="2">BackEnd</option>
            <option value="3">FullStack</option>
        </select>
        
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" />
    
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description" />
    
    
        <label for="link" class="form-label">Link al progetto</label>
        <input
            type="url"
            class="form-control"
            id="link"
            name="link"
        />
    
        <button type="submit" class="btn btn-primary mt-4">Salva</button>
    </form>
</div>
@endsection