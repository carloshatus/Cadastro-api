<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function create(Request $request)
    {
        $dados = $request->all();
        $cadastro = Cadastro::create($dados);
        return json_encode($cadastro);
    }
    
    public function getById($id)
    {
        $cadastro = Cadastro::find($id);
        return json_encode($cadastro);
    }

    public function getAll()
    {
        $cadastro = Cadastro::all();
        return json_encode($cadastro);
    }
}
