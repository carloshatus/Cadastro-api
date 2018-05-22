<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected  $fillable = ['nome','nome','data_nascimento','estado_civil','endereco','bairro','cidade','cep','telefone','nome_mae','nome_pai','cpf','rg','titulo'];
}
