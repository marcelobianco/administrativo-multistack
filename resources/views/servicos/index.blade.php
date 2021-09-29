@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
    <h1>Lista de Serviços</h1>
@stop

@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>Nome</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($servicos as $servico)
            <tr>
                <td>{{ $servico->id }}</td>
                <td>{{ $servico->nome }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('servicos.edit', $servico->id) }}">Atualizar</a>
                </td>
            </tr>
        @empty
            <tr>
                <td></td>
                <td>Nenhum serviço enccontrado</td>
                <td></td>
            </tr>
        @endforelse
    </tbody>
  </table>

    <div class="d-flex justify-content-center">
        {{ $servicos->links() }}
    </div>

    <div class="float-right">
        <a class="btn btn-success" href="{{ route('servicos.create') }}">Novo Serviço</a>
    </div>
@stop
