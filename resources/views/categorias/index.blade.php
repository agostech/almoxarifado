@extends('layouts.default')
@section('title', 'Categorias')

@section('content')
    <x-btn-create>
        <x-slot name="route">{{ @route('categorias.create') }}</x-slot>
        <x-slot name="title">Cadastrar Categoria</x-slot>
    </x-btn-create>

    <h1 class="fs-2 mb-3">Lista de Categorias</h1>

    <x-busca>
        <x-slot name="rota">{{ route('categorias.index') }}</x-slot>
        <x-slot name="tipo">Categoria</x-slot>
    </x-busca>

    <table class="table table-striped">
        <thead class="table-dark">
          <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>

        <tbody>
            <tr class="aling-middle text-center">
                <th scope="row">1</th>
                <td>Fardamento</td>
                <td>
                    <a href="{{ route('categorias.edit') }}" title="Editar" class="btn btn-primary"><i class="bi bi-pen"></i></a>
                    <a href="" title="Deletar" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
