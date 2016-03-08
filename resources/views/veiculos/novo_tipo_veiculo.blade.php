@extends('layouts.app')
@section('content')
  <div class="container">
    @if (old('DESC_TIPO_VEIC'))
      <div class="alert alert-success">Veículo cadastrado com sucesso</div>
    @endif
    @if($errors->all())
      <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        <ul>
          <li>{{ $error }}</li>
        </ul>
      @endforeach
      </div>
    @endif
    <form action="{{ route('tipo_veiculos.inserir') }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label for="Tipo do Veículo">Tipo do Veículo</label>
        <input type="text" name="DESC_TIPO_VEIC" value="" class="form-control">
      </div>
      <input type="submit" name="save_back" value="Salvar e Voltar" class="btn btn-primary">
      <input type="submit" name="save_new" value="Salvar e novo" class="btn btn-success">
      <a href="{{ route('tipo_veiculos') }}" class="btn btn-info">Voltar</a>
    </form>
  </div>

@stop
