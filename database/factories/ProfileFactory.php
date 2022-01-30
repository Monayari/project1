<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Profile::class;
    public function definition()
    {
        return [

            'age'=>$this->faker->numberBetween(1,100),
            'tahsilat'=>$this->faker->text(50),
            'job'=>$this->faker->text(),
            'user_id'=>User::factory(),

        ];
    }
}
