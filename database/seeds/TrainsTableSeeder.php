<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 30; $i++){
            $newTrain = new Train();
            $newTrain->agenzia = $faker->company() ;
            $newTrain->stazione_di_partenza= $faker->city();
            $newTrain->stazione_di_arrivo= $faker->city();
            $newTrain->orario_di_partenza= $faker->time();
            $newTrain->orario_di_arrivo=  $faker->time();

            $inizio_periodo = strtotime('1 january 2022');
            $fine_periodo = strtotime('31 december 2022');

            $date = mt_rand($inizio_periodo, $fine_periodo);

            $newTrain->giorno_di_partenza = date('Y-m-d', $date);
            $newTrain->giorno_di_arrivo = date('Y-m-d', $date);
            $newTrain->codice_treno= $faker->randomNumber(5, true);
            $newTrain->numero_carrozze= rand(1,30);
            $newTrain->save();
        }
    }
}
