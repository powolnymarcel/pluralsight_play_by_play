<?php

use Illuminate\Database\Seeder;
use App\Produit;
class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++)
        {
            $produit = Produit::create(array(
                'nom' => $faker->word,
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ));
        }
    }
}
