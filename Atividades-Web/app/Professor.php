<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['nome','matricula','cpf','telefone','email','cep','complemento','bairro','uf','municipio'];

}
