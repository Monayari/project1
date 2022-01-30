<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User as AuthUser;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
     protected $model=Blog::class;
    public function definition()
    {
        return [


            'title'=>$this->faker->text(50),
            'body'=>$this->faker->paragraph(rand(1,2)),
            'user_id'=>User::factory()->create()->id,
        ];
    }
}
