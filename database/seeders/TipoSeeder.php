<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TipoSeeder extends Seeder
{
    public function run(): void
    {
        Tipo::insert([
            ['nombre' => 'VIALIDAD'],
            ['nombre' => 'SERVICIOS'],
            ['nombre' => 'INFRAESTRUCTURA'],
            ['nombre' => 'EQUIPAMIENTO'],
            ['nombre' => 'SOCIOPRODUCTIVO']
        ]);
    }
}
