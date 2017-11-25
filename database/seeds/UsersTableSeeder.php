<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'nombres' => "Administrador",
            'usuario' => "admin",
            'password' => bcrypt('11'),
            'tipo' => "admin",
        ]);
    }
}
