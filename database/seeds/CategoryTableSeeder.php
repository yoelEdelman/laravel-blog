<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $categories = [ 0 =>"Music", 1 => "Movie", 2 =>  "Web", 3 => "Science",  4=>"Technology" ];

        foreach ($categories as $categorie){
            $cat = new category;
            $cat->title = $categorie;
            $cat->save();
        }

//        $faker = Faker::create();
//        for($i = 0; $i < 10; $i++){
//            $cat = new category;
//            $cat->title = $faker->word();
//            $cat->save();
//
//        }
    }
}
