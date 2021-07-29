@extends('adminlte::page')

@section('title', 'Editar Produto')

@section('content_header')
    <h3>Editar Produto</h3>
@stop

@section('content')
    @include('sweetalert::alert')
    @include('layouts.alert')

    <div class="row">
        <div class="col-12 mb-2 d-inline-flex flex-row-reverse">
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-md text-white">Listar Produtos <i
                    class="fas fa-fw fa-list"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           value="{{ $product->name, old('name') }}"
                                           class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category_id">Categoria</label>
                                    <select name="category_id"
                                            id="category_id"
                                            class="form-control {{ ($errors->has('category_id') ? 'is-invalid' : '') }}">
                                        <option value="" disabled selected>-- Selecione --</option>
                                            @foreach($categories as $category)
                                                <option {{ $category->id === $product->category->id ? 'selected' : '' }}
                                                        value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Descrição</label>
                                    <textarea name="description"
                                              id="description"
                                              class="form-control"
                                              cols="30"
                                              rows="3">{{ $product->description, old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quantity">Quantidade</label>
                                    <input type="number"
                                           name="quantity"
                                           id="quantity"
                                           value="{{ $product->quantity, old('quantity') }}"
                                           min="1"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="unit_price">Preço Unitário (R$)</label>
                                    <input type="number"
                                           name="unit_price"
                                           min="0"
                                           step=".01"
                                           value="{{ $product->unit_price, 'unit_price' }}"
                                           id="unit_price"
                                           class="form-control">
                                </div>
                            </div>
                        </div>


                        <button class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
