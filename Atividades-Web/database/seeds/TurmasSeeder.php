<?php

use Illuminate\Database\Seeder;

class TurmasSeeder extends Seeder
{

    public function run()
    {
        DB::table('turmas')->insert([
            ['disciplinas_id'=>'1', 'professor_id'=>1],

        ]);
    }
}
