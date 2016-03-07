<?php

namespace fretamento\Http\Controllers;

use Illuminate\Http\Request;
use fretamento\Http\Requests\TipoVeiculoRequest;
use fretamento\TipoVeiculo;

use fretamento\Http\Requests;

class TipoVeiculoController extends Controller
{
    public function listagem()
    {
        $tipoVeiculos = TipoVeiculo::paginate(10);

        return view('veiculos.tipo_veiculos', compact('tipoVeiculos'));
    }
}
