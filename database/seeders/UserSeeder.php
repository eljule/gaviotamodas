<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Julio Chavez Crisanto',
            'email' => 'sam.juliochavez@gmail.com',
            'password' => bcrypt('parami41')
        ]);
    }
}
