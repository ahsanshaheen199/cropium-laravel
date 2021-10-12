<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 3; $i++): 
            $users = [
                'name'         => 'admin-' . $i,
                'email'        => Str::random(12),
                'password'     => Hash::make('touhid'),
            ];
            DB::table('users')->insert($users);
        endfor;
    }
}
