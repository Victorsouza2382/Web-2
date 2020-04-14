<?php

use Illuminate\Database\Seeder;

class AlunosSeeder extends Seeder
{

    public function run()
    {
        DB::table('alunos')->insert([
            ['nome'=>'Victor', 'telefone'=>984595417, 'email'=>'Victorsouza2382@gmail.com','cep'=>'72-231-607','complemento'=>'proximo a diacuy','bairro'=>'QNL','uf'=>'DF','municipio'=>'P.sul','data_nascimento'=>'1999-08-29'],
        ]);
    }
}
