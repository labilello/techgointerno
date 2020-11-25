<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phones' => array(),
            'legajo' => $this->faker->numberBetween(10000, 50000),
            'sector' => $this->faker->randomElement(array('Asesor Integral', 'Comercial', 'Gerente', 'Tecnico')),
            'role' => 'Usuario',
            'email' => $this->faker->unique()->safeEmail,
            'store_id' => $this->faker->numberBetween(1, 32),
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
        ];
    }
}
