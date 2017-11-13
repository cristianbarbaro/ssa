<?php

use Illuminate\Database\Seeder;
use App\Objeto;

class ObjetosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // And now, let's create a few articles in our database:
        Objeto::create([
            'nombre' => 'cocina',
            'descripcion' => 'Cocina 4 hornallas',
            'cantidad' => 1,
            'incidente_id' => 1,
        ]);

        Objeto::create([
            'nombre' => 'alacena',
            'descripcion' => 'de madera de roble',
            'cantidad' => 2,
            'incidente_id' => 1,
        ]);
    }
}
