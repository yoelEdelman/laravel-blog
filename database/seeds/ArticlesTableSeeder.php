<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\article;

class ArticlesTableSeeder extends Seeder
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
            $article = new article;
            $article->title = $faker->realtext( 15);
            $article->description = $faker->realtext( 70);
            $article->content = $faker->realText(200);
            $article->category_id = rand(11, 15);
            $article->user_id = rand(1, 10);
            $article->publish = rand(0, 1);



            $article->save();

        }
    }
}
