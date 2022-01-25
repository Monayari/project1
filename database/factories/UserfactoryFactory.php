<?php
use App\User;
namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

class UserfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= User::class;

    public function definition()
    {

        return [

            'name'=>$this->faker->name,
        'family'=>$this->faker->name,
        'phone'=>$this->faker->phoneNumber,
        'address'=>$this->faker->address,
        'email'=>$this->faker->unique()->email,
        ];
    }
}
