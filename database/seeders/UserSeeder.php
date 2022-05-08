<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'name' => 'Herlan Sumarlin',
            'email' => 'hzsn@hzsn.my.id',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
    }
}
