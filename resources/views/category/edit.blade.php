@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
    <h3>Editar Categoria</h3>
@stop

@section('content')
    @include('sweetalert::alert')
    @include('layouts.alert')

    <div class="row">
        <div class="col-12 mb-2 d-inline-flex flex-row-reverse">
            <a href="{{ route('categories.index') }}" class="btn btn-primary btn-md text-white">Listar Categorias <i
                    class="fas fa-fw fa-list"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           value="{{ $category->name, old('name') }}"
                                           class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
