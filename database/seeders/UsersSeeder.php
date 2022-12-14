<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'type' => 2,
            'photo' => 'default/person.svg',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->times(5)->create();
    }
}
