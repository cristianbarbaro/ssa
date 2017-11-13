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
        // And now, let's create a few articles in our database:
        Incidente::create([
            'user_id' => 1,
            'descripcionIncidente' => 'Se me prendió fuego la cocina',
            'fechaIncidente' => '2017/11/01',
        ]);
    }
}
