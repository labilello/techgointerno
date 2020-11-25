<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Leandro Alexis Bilello',
            'phones' => array(),
            'legajo' => '56441',
            'sector' => 'Sistemas Compumundo',
            'role' => 'Administrador',
            'email' => 'lbilello@techgo.com.ar',
            'store_id' => 33,
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
        ]);
        User::factory(150)->create();

    }
}
