@extends('layouts.app')
@section('content')
  @if (old('desc_veiculo'))
    <div class="alert alert-success">Veículo cadastrado com sucesso</div>
  @elseif(old('update'))
    <div class="alert alert-success">Veículo alterado com sucesso</div>
  @elseif(old('delete'))
    <div class="alert alert-success">Veículo deletado com sucesso</div>  
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
      <td>{{ $veiculo->id }}</td>
      <td>{{ $veiculo->desc_veiculo }}</td>
      <td><a href="{{ route('tipo_veiculos.edita', ['id'=>$veiculo->id]) }}">
            <span class="fa fa-edit"></span>
          </a>
          <a href="{{ route('tipo_veiculos.remove', ['id'=>$veiculo->id]) }}">
            <span class="fa fa-remove"></span>
          </a>
    </td>
    </tr>
    @endforeach
  </table>
@stop
