<?php

namespace fretamento\Http\Controllers;

use Illuminate\Http\Request;

use fretamento\Http\Requests;

class VeiculosController extends Controller
{
    public function index()
    {
      return view('veiculos.veiculos');
    }
}
