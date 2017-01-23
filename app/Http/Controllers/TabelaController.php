<?php

namespace App\Http\Controllers;

use App\Despesa;

class TabelaController extends Controller
{
    public function index()
    {
        $despesas = Despesa::all();

        return view('tabela', compact('despesas'));
    }
}
