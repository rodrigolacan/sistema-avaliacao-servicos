<?php

namespace App\Http\Controllers\Contents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesquisarAvalicaoController extends Controller
{
    public function pesquisarAvaliacao(){
        return view('contents.pesquisarAvaliacao');
    }
}
