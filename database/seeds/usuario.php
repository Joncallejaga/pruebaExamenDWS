<?php

use Illuminate\Database\Seeder;

class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($usuarios=1;$usuarios!=13;$usuarios++){

            DB::table('user')->insert(array(
                'nombre'=>'usuario'.$usuarios,
                'password'=>123
            ));
    }
}
}
