<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\User;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for($i = 0; $i < 10; $i++){
            $user = new User;
            $user->name = $faker->firstName();
            $user->email = $faker->email();
            $user->password = $faker->word();
            $user->avatar = $faker->imageUrl($width = 640, $height = 480);
            $user->save();

        }
    }
}
