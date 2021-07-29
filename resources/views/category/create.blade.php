@extends('adminlte::page')

@section('title', 'Cadastrar Categoria')

@section('content_header')
    <h3>Cadastrar Categoria</h3>
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
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text"
                                           name="name"
                                           value="{{ old('name') }}"
                                           id="name"
                                           class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}">
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
