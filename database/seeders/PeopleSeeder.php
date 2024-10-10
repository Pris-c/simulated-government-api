<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;


class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

        // Gera 50 registros usando a factory
        People::factory()->count(50)->create();
    }
}
