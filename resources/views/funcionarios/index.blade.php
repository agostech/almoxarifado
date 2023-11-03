@extends('layouts.default')
@section('title', 'Funcionarios')

@section('content')
    <x-btn-create>
        <x-slot name="route">{{ @route('funcionarios.create') }}</x-slot>
        <x-slot name="title">Cadastrar Funcrionário</x-slot>
    </x-btn-create>

    <h1 class="fs-2 mb-3">Lista de Funcionários</h1>

    <x-busca>
        <x-slot name="rota">{{ route('funcionarios.index') }}</x-slot>
        <x-slot name="tipo">Funcionário</x-slot>
    </x-busca>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Nome</th>
                <th scope="col">Departamento</th>
                <th scope="col" width="110px">Ações</th>
            </tr>
        </thead>

        <tbody>
            <tr class="align-middle text-center">
                <th scope="row">1</th>
                <td>
                    <img src="/images/sombra_funcionario.jpg" alt="foto" class="img-thumbnail" width="70">
                </td>
                <td>Admin</td>
                <td>Recursos Humanos</td>
                <td>
                    <a href="{{ route('funcionarios.edit') }}" title="Editar" class="btn btn-primary"><i class="bi bi-pen"></i></a>
                    <a href="" title="Deletar" class="btn btn-danger" data-bs-toggle="modal" data-bs-target=""><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
