<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        $title = $this->faker->sentence();
        return [
            'title'         => $this->faker->sentence(),
            'excerpt'       => $this->faker->paragraph(),
            'content'       => $this->faker->paragraph( 6 ),
            'thumbnail'     => 'https://via.placeholder.com/600',
            'author_name'   => $this->faker->name(),
            'category_name' => $this->faker->word(),
            'slug'          => Str::slug( $title ),
        ];
    }
}