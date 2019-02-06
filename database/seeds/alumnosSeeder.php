<?php

use Illuminate\Database\Seeder;

class alumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($alumnos=1;$alumnos!=10;$alumnos++){

        DB::table('alumnos')->insert(array(
            'nombre'=>'alumno'.$alumnos, 
            'id_profesor'=>rand(1,3),
        ));
    }

    }
}
