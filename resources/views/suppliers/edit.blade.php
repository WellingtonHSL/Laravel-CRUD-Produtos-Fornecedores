@extends('layouts.app')

@section('title', 'Editar Fornecedor')

@section('content')
    <h1>Editar Fornecedor</h1>

    <form action="{{ route('suppliers.update', $supplier) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Fornecedor</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $supplier->nome }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
