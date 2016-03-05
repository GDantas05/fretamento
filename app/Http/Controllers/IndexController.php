<?php

namespace fretamento\Http\Controllers;

use Illuminate\Http\Request;

use fretamento\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
      return view('index');
    }
}
