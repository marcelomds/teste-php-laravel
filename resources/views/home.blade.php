@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $countCategories ?? 0 }}</h3>

                    <p>Total de Categorias</p>
                </div>
                <div class="icon">
                    <i class="fab fa-hive"></i>
                </div>
                <a href="{{ route('categories.index') }}" class="small-box-footer">
                    Ver todas <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $countProducts ?? 0 }}</h3>

                    <p>Total de Produtos</p>
                </div>
                <div class="icon">
                    <i class="fab fa-buffer"></i>
                </div>
                <a href="{{ route('products.index') }}" class="small-box-footer">
                    Ver todos <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
@stop
