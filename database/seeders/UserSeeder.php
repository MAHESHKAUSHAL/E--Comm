<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;//password ko de code kr deti h hash ka use isiliye kert h

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'mahesh kaushal',
            "email"=>"mahesh@kaushal.com",
            "password"=>Hash::make('12345')
        ]);
    }
}
