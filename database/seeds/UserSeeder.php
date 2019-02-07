<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'username'=>'usuario'.$usuarios,
                'password'=>Hash::make('123')));
    }
    }
}
