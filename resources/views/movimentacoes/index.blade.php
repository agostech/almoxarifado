@extends('layouts.default')
@section('title', 'Movimentações')

@section('content')

    <h1 class="fs-2 mb-3">Histórico de Movimentacoes</h1>

    <x-busca>
        <x-slot name="rota">{{ route('movimentacoes.index') }}</x-slot>
        <x-slot name="tipo">Produto</x-slot>
    </x-busca>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Tipo</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data</th>
            </tr>
        </thead>

        <tbody>
            <tr class="align-middle text-center">
                <th scope="row">1</th>
                <td>Saída</td>
                <td>Pá</td>
                <td>2</td>
                <td>10/10/2023</td>
            </tr>
        </tbody>
    </table>
@endsection
