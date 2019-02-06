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
            'nombre'=>'Pedro', 
            'departamento'=>'Informatica',
        ));
        DB::table('profesores')->insert(array(
            'nombre'=>'Julio', 
            'departamento'=>'Lengua',
        ));
        DB::table('profesores')->insert(array(
            'nombre'=>'Elena', 
            'departamento'=>'Politica',
        ));
    }
}
