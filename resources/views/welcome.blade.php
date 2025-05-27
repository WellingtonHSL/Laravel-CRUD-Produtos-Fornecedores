@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Produtos Cadastrados</h1>

        <div class="row">
            @forelse ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">{{ $product->nome }}</h2>
                            <p class="card-text"><strong>R$ {{ number_format($product->preco, 2, ',', '.') }}</strong></p>
                            <h5 class="card-subtitle text-muted">Fornecedor: {{ $product->supplier->nome ?? 'N/A' }}</h5>
                        </div>
                    </div>
                </div>
            @empty
                <p>Nenhum produto cadastrado.</p>
            @endforelse
        </div>
    </div>
@endsection