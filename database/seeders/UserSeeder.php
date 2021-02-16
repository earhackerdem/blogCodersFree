<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Earvin Saúl Pérez Ramos',
            'email' => 'earhackerdem@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(9)->create();
    }
}
