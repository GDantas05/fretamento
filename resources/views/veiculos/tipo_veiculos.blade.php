@extends('layouts.app')
@section('content')
  <div class="container">
    @if (old('DESC_TIPO_VEIC'))
      <div class="alert alert-success">Veículo cadastrado com sucesso</div>
    @elseif(old('update'))
      <div class="alert alert-success">Veículo alterado com sucesso</div>
    @elseif(isset($_GET['operacao']) && $_GET['operacao'] == 'delete')
      <div class="alert alert-success">Veículo removido com sucesso</div>
    @endif
    <a href="{{ route('tipo_veiculos.novo') }}" class="btn btn-default">Novo</a>
    <br>
    <br>
    <table class="table table-striped table-bordered">
      <tr>
        <th>ID</th>
        <th>Descrição Veículo</th>
        <th>Ações</th>
      </tr>
      @foreach($tipoVeiculos as $veiculo)
      <tr>
        <td>{{ $veiculo->ID_TIPO_VEIC }}</td>
        <td>{{ $veiculo->DESC_TIPO_VEIC }}</td>
        <td><a href="{{ route('tipo_veiculos.edita', ['id'=>$veiculo->ID_TIPO_VEIC]) }}">
              <span class="fa fa-edit"></span>
            </a>
            <a href="{{ route('tipo_veiculos.remove', ['id'=>$veiculo->ID_TIPO_VEIC]) }}">
              <span class="fa fa-remove"></span>
            </a>
      </td>
      </tr>
      @endforeach
    </table>
  </div>
@stop
