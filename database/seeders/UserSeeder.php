<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \DB::table('users')->insert(
        	array(
        		array(
                    'name'=>'Galy Ricardo',
                    'email'=>'ingenieria@simbiotica.com.co',
                    'password'=>\Hash::make('123456789'),
                    'created_at'=>date("Y-m-d H:i:s"),
                    'updated_at'=>null
                ),
            )
        );
    }
}
