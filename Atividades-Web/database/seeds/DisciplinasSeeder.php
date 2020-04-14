<?php

use Illuminate\Database\Seeder;

class DisciplinasSeeder extends Seeder
{

    public function run()
    {
        DB::table('disciplinas')->insert([
            ['nome'=>'Rede de Computadores', 'curso_id'=>1],
            ['nome'=>'Programação Orientada a objetos ', 'curso_id'=>2],
            ['nome'=>'Auditoria e Segurança', 'curso_id'=>3],
        ]);
    }
}
