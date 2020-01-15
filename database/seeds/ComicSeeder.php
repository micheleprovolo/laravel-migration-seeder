<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newComicData = [
                'title' => $faker->name,
                'year' => $faker->year,
                'author' => $faker->name,
                'comment' => $faker->text,
                'rate' => $faker->numberBetween($min = 1, $max = 10)
            ];

            $comic = new Comic;
            $comic->fill($newComicData);
            $comic->save();
        }
    }
}