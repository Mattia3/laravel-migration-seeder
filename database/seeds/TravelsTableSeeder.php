<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
          $newViaggio = new Travel();
          $newViaggio->prezzo = $faker->numberBetween(100, 1000);
          $newViaggio->data = $faker->dateTime();
          $newViaggio->persone = $faker->numberBetween(1, 10);
          $newViaggio->città = $faker->country();
          $newViaggio->partenza = $faker->country();
          $newViaggio->save();
        }
    }
}
