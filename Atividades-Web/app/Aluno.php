<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'cep', 'complemento', 'bairro', 'uf', 'municipio','data_nascimento'];
}
