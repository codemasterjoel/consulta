<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estatus;

class EstatusSeeder extends Seeder
{
    public function run(): void
    {
        Estatus::insert([
            ['nombre'=>'A LA ESPERA DE RECURSOS'],
            ['nombre'=>'CULMINADO'],
            ['nombre'=>'EN EJECUCIÓN'],
            ['nombre'=>'PRE-EVALUACION'],
            ['nombre'=>'APROBADO']
        ]);
    }
}
