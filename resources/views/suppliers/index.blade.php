@extends('layouts.app')

@section('title', 'Fornecedores')

@section('content')
    <h1>Fornecedores</h1>
    <a href="{{ route('suppliers.create') }}" class="btn btn-success mb-3">Novo Fornecedor</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->nome }}</td>
                    <td>
                        <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection