<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array ('name' => 'Kamiyab', 'email' => 'kamiyab@gmail.com', 'password' => Hash::make('123')),
            array ('name' => 'Abidhusain', 'email' => 'abidhusain@gmail.com', 'password' => Hash::make('123'))
        );
        DB::table('users')->insert($data);
    }
}
