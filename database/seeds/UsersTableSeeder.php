<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Incidente;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $user = User::create([
        'name' => 'Cliente Uno',
        'email' => config('app.user1'),
        'password' => bcrypt(config('app.user1pass')),
      ]);

      // $user->incidentes()->save($incidente);

    }
}
