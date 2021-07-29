@extends('adminlte::page')

@section('title', 'Lista de Categorias')

@section('content_header')
    <h3>Lista de Categorias</h3>
@stop

@section('content')
    @include('sweetalert::alert')

    <div class="row">
        <div class="col-12 mb-2 d-inline-flex flex-row-reverse">
            <a href="{{ route('categories.create') }}" class="btn btn-primary btn-md text-white">Adicionar Nova
                Categoria <i
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
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($categories->count())
                            @foreach($categories as $category)
                                <tr>
                                    <td width="900">{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" title="Editar"
                                           class="btn btn-warning btn-sm">
                                            <i class='fas fa-edit'></i>
                                        </a>
                                        <button data-toggle="modal" data-target="#deleteModalCenter-{{$category->id}}"
                                                class="btn btn-danger btn-sm" title="Remover">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="2">Não há categorias cadastradas</td>
                            </tr>
                        @endif
                        @include('category.delete')
                        </tbody>
                    </table>

                    {{ $categories->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection
