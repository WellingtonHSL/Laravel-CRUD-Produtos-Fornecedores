@extends('layouts.app')

@section('title', 'Novo Fornecedor')

@section('content')
    <h1>Novo Fornecedor</h1>

    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Fornecedor</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
