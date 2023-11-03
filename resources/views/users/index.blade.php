@extends('layouts.default')
@section('title', 'Users')

@section('content')
    <x-btn-create>
        <x-slot name="route">{{ route('users.create') }}</x-slot>
        <x-slot name="title">Cadastrar Usuário</x-slot>
    </x-btn-create>

    <h1 class="fs-2 mb-3">Lista de Usuários</h1>

    <x-busca>
        <x-slot name="rota">{{ route('users.index') }}</x-slot>
        <x-slot name="tipo">Usuário</x-slot>
    </x-busca>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Tipo</th>
                <th scope="col" width="110px">Ações</th>
            </tr>
        </thead>

        <tbody>
            <tr class="aling-middle text-center">
                <th scope="row">1</th>
                <td>Admin</td>
                <td>admin@gmail.com</td>
                <td>Admin</td>
                <td>
                    <a href="{{ route('users.edit') }}" title="Editar" class="btn btn-primary"><i class="bi bi-pen"></i></a>
                    <a href="" title="Deletar" class="btn btn-danger" data-bs-toggle="modal" data-bs-target=""><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
