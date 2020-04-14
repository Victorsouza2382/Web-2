<?php

use Illuminate\Database\Seeder;

class ProfessoresSeeder extends Seeder
{

    public function run()
    {
        DB::table('professores')->insert([
            ['nome'=>'Orion','matricula'=>'18213487665','cpf'=>'873.234.458-87', 'telefone'=>984595417, 'email'=>'OrionTeles@gmail.com','cep'=>'72-231-607','complemento'=>'proximo a diacuy','bairro'=>'QNL','uf'=>'DF','municipio'=>'P.sul'],
        ]);
    }
}
