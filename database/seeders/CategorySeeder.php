<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 6; $i++): 
            $category = [
                'name'         => Str::random(30),
                'slug'          => Str::random(20),
            ];
            DB::table('categories')->insert($category);
        endfor;
    }
}
