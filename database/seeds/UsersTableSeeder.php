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
      // DB::table('users')->insert([
      //   'name' => 'Cristian Barbaro',
      //   'email' => 'cristiandanielbarbaro@gmail.com',
      //   'password' => bcrypt('secret123!'),
      // ]);

      $user = User::create([
        'name' => 'Cristian Barbaro',
        'email' => 'cristiandanielbarbaro@gmail.com',
        'password' => bcrypt(config('app.user1pass')),
      ]);

      // $user->incidentes()->save($incidente);

    }
}
