@extends('layouts.default')
@section('title', 'Produtos')

@section('content')
    <x-btn-create>
        <x-slot name="route">{{ @route('produtos.create') }}</x-slot>
        <x-slot name="title">Cadastrar Produto</x-slot>
    </x-btn-create>

    <h1 class="fs-2 mb-3">Lista de Produtos</h1>

    <x-busca>
        <x-slot name="rota">{{ route('produtos.index') }}</x-slot>
        <x-slot name="tipo">Produto</x-slot>
    </x-busca>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tamanho</th>
                <th scope="col" width="110px">Ações</th>
            </tr>
        </thead>

        <tbody>
            <tr class="align-middle text-center">
                <th scope="row">1</th>
                <td>Calça</td>
                <td>Fardamento</td>
                <td>46</td>
                <td>
                    <a href="{{ route('produtos.edit') }}" title="Editar" class="btn btn-primary"><i class="bi bi-pen"></i></a>
                    <a href="" title="Deletar" class="btn btn-danger" data-bs-toggle="modal" data-bs-target=""><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
