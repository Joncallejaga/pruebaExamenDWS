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
            'id_usuario'=>3+$alumnos,
            'id_profesor'=>rand(1,3),
        ));
    }

    }
}
