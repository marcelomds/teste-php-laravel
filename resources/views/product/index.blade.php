@extends('adminlte::page')

@section('title', 'Lista de Produtos')

@section('content_header')
    <h3>Lista de Produtos</h3>
@stop

@section('content')
    @include('sweetalert::alert')

    <div class="row">
        <div class="col-12 mb-2 d-inline-flex flex-row-reverse">
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-md text-white">Adicionar Novo Produto <i
                    class="fas fa-fw fa-plus"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Descrição</th>
                            <th>Preço Unitário</th>
                            <th>Quantidade</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($products->count())
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->description ?? 'não informado' }}</td>
                                    <td>R$ {{ number_format($product->unit_price, 2, ',', '') ?? 'não informado' }}</td>
                                    <td>{{ $product->quantity ?? 'não informado' }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}" title="Editar"
                                           class="btn btn-warning btn-sm">
                                            <i class='fas fa-edit'></i>
                                        </a>
                                        <button data-toggle="modal" data-target="#deleteModalCenter-{{ $product->id }}"
                                                class="btn btn-danger btn-sm" title="Remover">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="6">Não há produtos cadastrados</td>
                            </tr>
                        @endif
                        @include('product.delete')
                        </tbody>
                    </table>

                    {{ $products->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection
