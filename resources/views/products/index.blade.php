@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
    <h1>Produtos</h1>
    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Novo Produto</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Fornecedor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->nome }}</td>
                    <td>R$ {{ number_format($product->preco, 2, ',', '.') }}</td>
                    <td>{{ $product->supplier->nome }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection