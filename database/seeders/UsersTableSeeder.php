<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     $faker = \Faker\Factory::create();
    //    foreach(range(1,10) as $user){
    //    DB::table('users')->insert([

    //     'name'=>$faker->name,
    //     'family'=>$faker->name,
    //     'phone'=>$faker->phoneNumber,
    //     'address'=>$faker->address,
    //     'email'=>$faker->unique()->email,
    //     'created_at'=>now(),
    //     'updated_at'=>now()
    //    ]);
     User::factory()->count(10)->create();
       }
}

