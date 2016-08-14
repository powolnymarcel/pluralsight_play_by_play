<?php

use Illuminate\Database\Seeder;
use App\Description;

class DescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i < 100; $i++)
        {
            $description = Description::create(array(
                'body' => $faker->text,
                'produit_id'=>$i,
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ));
        }
    }
}
