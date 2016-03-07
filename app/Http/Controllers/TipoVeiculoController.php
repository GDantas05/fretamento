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

    public function novo()
    {
        return view ('veiculos.novo_tipo_veiculo');
    }

    public function inserir(TipoVeiculoRequest $request)
    {

        TipoVeiculo::create($request->all());

        if($request->input('save_back')) {
            return redirect()->action('TipoVeiculoController@listagem')->withInput($request->only('desc_veiculo'));
        } else {
            return redirect()->action('TipoVeiculoController@novo')->withInput($request->only('desc_veiculo'));
        }

    }

    public function edita($id)
    {
        $veiculo = TipoVeiculo::find($id);

        return view('veiculos.altera_tipo_veiculo', compact('veiculo'));
    }

    public function update(TipoVeiculoRequest $request, $id)
    {
        $novoValor = $request->all();
        $veiculo = TipoVeiculo::find($id);

        $veiculo->desc_veiculo = $novoValor['desc_veiculo'];
        $veiculo->save();

        return redirect()->action('TipoVeiculoController@listagem')->withInput($request->only('update'));
    }
}
