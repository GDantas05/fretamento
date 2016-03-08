@extends('layouts.app')
@section('content')
  <div class="container">
    @if($errors->all())
      <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        <ul>
          <li>{{ $error }}</li>
        </ul>
      @endforeach
      </div>
    @endif
    <form action="{{ route('tipo_veiculos.update', ['id'=>$veiculo->ID_TIPO_VEIC]) }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="ID_TIPO_VEIC" value="{{ $veiculo->ID_TIPO_VEIC }}">
      <div class="form-group">
        <label for="Tipo do Veículo">Tipo do Veículo</label>
        <input type="text" name="DESC_TIPO_VEIC" value="{{ $veiculo->DESC_TIPO_VEIC }}" class="form-control">
      </div>
      <input type="submit" name="update" value="Alterar" class="btn btn-primary">
      <a href="{{ route('tipo_veiculos') }}" class="btn btn-info">Voltar</a>
    </form>
  </div>
@stop
