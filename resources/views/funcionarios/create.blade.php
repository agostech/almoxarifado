@extends('layouts.default')
@section('title', 'Gard - Cadastro de Funcionário')

@section('content')
    <h1 class="fs-2 mb-3">Cadastro de Funcionário</h1>

    <form class="row g-3" method="POST" action="" enctype="multipart/form-data">

        <!-- Fazer aqui - O formulário de funcionário -->
        @include('funcionarios.partials.form')
        <div class="col-12">
            <button type="submit" class="btn btn-success">Confirmar</button>
            <a href="{{ route('funcionarios.index') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@endsection
