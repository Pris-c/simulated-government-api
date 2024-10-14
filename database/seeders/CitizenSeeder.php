<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Citizen;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $citizen = [
            ['name' => 'João Silva', 'nif' => '123456789', 'birthdate' => '1990-01-15'],
            ['name' => 'Maria Ferreira', 'nif' => '987654321', 'birthdate' => '1985-03-22'],
            ['name' => 'Pedro Santos', 'nif' => '135792468', 'birthdate' => '1978-07-30'],
            ['name' => 'Ana Costa', 'nif' => '246813579', 'birthdate' => '1992-06-05'],
            ['name' => 'Tiago Oliveira', 'nif' => '111223344', 'birthdate' => '1995-11-12'],
            ['name' => 'Sofia Alves', 'nif' => '999887766', 'birthdate' => '1988-02-28'],
            ['name' => 'Carlos Pereira', 'nif' => '555666777', 'birthdate' => '1980-05-21'],
            ['name' => 'Inês Ribeiro', 'nif' => '888999000', 'birthdate' => '1993-09-10'],
            ['name' => 'Rui Martins', 'nif' => '333444555', 'birthdate' => '1987-12-03'],
            ['name' => 'Clara Mendes', 'nif' => '222111000', 'birthdate' => '1991-04-17'],
        ];

        foreach ($citizen as $citizen) {
            Citizen::create($citizen);
        }
    }
}
