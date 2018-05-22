<?php

namespace App\Http\Controllers;

use App\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function create(Request $request)
    {
        $cadastro = Cadastro::create($request);
        return json_encode($cadastro);
    }
    
    public function getById(Cadastro $cadastro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function edit(Cadastro $cadastro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadastro $cadastro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cadastro $cadastro)
    {
        //
    }
}
