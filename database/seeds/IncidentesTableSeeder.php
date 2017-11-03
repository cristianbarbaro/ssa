<?php

use Illuminate\Database\Seeder;
use App\Incidente;

class IncidentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Incidente::truncate();
        
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        Incidente::create([
            'nroCliente' => 1,
            'descripcionIncidente' => 'Se me prendió fuego la cocina',
            'fechaIncidente' => '2017/11/01',
        ]);
    }
}
