<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Produto;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 1000) as $index) {
            Produto::create([
                'nome' => $faker->word,
                'preco' => $faker->randomFloat(2, 1, 1000) //2 casas decimais de um numero variando de 1 até 1000;
            ]);
        }
    }
}
