@extends('layouts.default')
@section('title', 'Departamentos')

@section('content')
    <x-btn-create>
        <x-slot name="route">{{ @route('departamentos.create') }}</x-slot>
        <x-slot name="title">Cadastrar Departamento</x-slot>
    </x-btn-create>

    <h1 class="fs-2 mb-3">Lista de Departamentos</h1>

    <x-busca>
        <x-slot name="rota">{{ route('departamentos.index') }}</x-slot>
        <x-slot name="tipo">Departamento</x-slot>
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
                <td>Recursos Humanos</td>
                <td>
                    <a href="{{ route('departamentos.edit') }}" title="Editar" class="btn btn-primary"><i class="bi bi-pen"></i></a>
                    <a href="" title="Deletar" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
