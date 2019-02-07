<?php

use Illuminate\Database\Seeder;

class profesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesores')->insert(array(
            'id_usuario'=>1,
            'departamento'=>'Informatica',
        ));
        DB::table('profesores')->insert(array(
            'id_usuario'=>2,
            'departamento'=>'Lengua',
        ));
        DB::table('profesores')->insert(array(
            'id_usuario'=>3,
            'departamento'=>'Politica',
        ));
    }
}
