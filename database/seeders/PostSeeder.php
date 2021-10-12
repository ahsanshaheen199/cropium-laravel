<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++): 
            $posts = [
                'title'         => Str::random(40),
                'slug'          => Str::random(25),
                'excerpt'       => Str::random(120),
                'content'       => Str::random(300),
                'thumbnail'     => 'blog-image-1.jpg',
                'author_name'   => 'Touhid',
                'category_name' => 'Web',
                'created_at'    => now(),
            ];
            DB::table('posts')->insert($posts);
        endfor;
    }
}
