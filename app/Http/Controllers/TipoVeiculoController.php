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
        $operacao = 'listagem';


        return view('veiculos.tipo_veiculos', compact('tipoVeiculos', 'operacao'));
    }

    public function novo()
    {
        return view ('veiculos.novo_tipo_veiculo');
    }

    public function inserir(TipoVeiculoRequest $request)
    {

        TipoVeiculo::create($request->all());

        if($request->input('save_back')) {
            return redirect()->action('TipoVeiculoController@listagem')->withInput($request->only('DESC_TIPO_VEIC'));
        } else {
            return redirect()->action('TipoVeiculoController@novo')->withInput($request->only('DESC_TIPO_VEIC'));
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

        $veiculo->DESC_TIPO_VEIC = $novoValor['DESC_TIPO_VEIC'];
        $veiculo->save();

        return redirect()->action('TipoVeiculoController@listagem')->withInput($request->only('update'));
    }

    public function remove($id)
    {
        $veiculo = TipoVeiculo::find($id);

        $veiculo->delete();

        return redirect()->route('tipo_veiculos', ['operacao' => 'delete']);
    }
}
