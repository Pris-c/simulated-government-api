<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\People;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = People::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'nif' => $this->faker->unique()->numerify('#########'), // Gera um NIF único de 9 dígitos
            'birthdate' => $this->faker->date('Y-m-d', '2003-12-31'), // Gera uma data aleatória antes de 2003
        ];
        
    }
}
