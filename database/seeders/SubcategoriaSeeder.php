<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subcategoria;

class SubcategoriaSeeder extends Seeder
{
    public function run(): void
    {
        Subcategoria::insert([
            ['id' => '1','categoria_id' => '1','nombre' => 'CONSTRUCCIÓN'],
            ['id' => '2','categoria_id' => '1','nombre' => 'REPARACIÓN'],
            ['id' => '3','categoria_id' => '2','nombre' => 'CONSTRUCCIÓN'],
            ['id' => '4','categoria_id' => '2','nombre' => 'REPARACIÓN'],
            ['id' => '5','categoria_id' => '3','nombre' => 'CONSTRUCCIÓN'],
            ['id' => '6','categoria_id' => '3','nombre' => 'REPARACIÓN'],
            ['id' => '7','categoria_id' => '4','nombre' => 'ALUMBRADO PÚBLICO'],
            ['id' => '8','categoria_id' => '4','nombre' => 'REDES ELECTRICAS URBANAS'],
            ['id' => '9','categoria_id' => '5','nombre' => 'SUSTITUCIÓN DE CILINDROS'],
            ['id' => '10','categoria_id' => '6','nombre' => 'SOLO AGUAS BLANCAS'],
            ['id' => '11','categoria_id' => '6','nombre' => 'SOLO AGUAS SERVIDAS'],
            ['id' => '12','categoria_id' => '6','nombre' => 'AGUAS BLANCAS Y SERVIDAS'],
            ['id' => '13','categoria_id' => '6','nombre' => 'CANALIZACIÓN'],
            ['id' => '14','categoria_id' => '6','nombre' => 'MANTENIMIENTO PLANTA POTABILIZADORA'],
            ['id' => '15','categoria_id' => '6','nombre' => 'SISTEMA DE BOMBEO'],
            ['id' => '16','categoria_id' => '6','nombre' => 'TANQUES DE ALMACENAMIENTOS'],
            ['id' => '17','categoria_id' => '7','nombre' => 'REHABILITACIÓN'],
            ['id' => '18','categoria_id' => '7','nombre' => 'REPARACIÓN '],
            ['id' => '19','categoria_id' => '8','nombre' => 'CONSTRUCCIÓN'],
            ['id' => '20','categoria_id' => '9','nombre' => 'REHABILITACIÓN'],
            ['id' => '21','categoria_id' => '10','nombre' => 'REHABILITACIÓN'],
            ['id' => '22','categoria_id' => '11','nombre' => 'CONSTRUCCIÓN'],
            ['id' => '23','categoria_id' => '11','nombre' => 'FACHADAS'],
            ['id' => '24','categoria_id' => '11','nombre' => 'HIPERMEABILIZACIÓN'],
            ['id' => '25','categoria_id' => '11','nombre' => 'REHABILITACIÓN'],
            ['id' => '26','categoria_id' => '11','nombre' => 'SUSTITUCIÓN DE TECHO'],
            ['id' => '27','categoria_id' => '12','nombre' => 'ADQUISICIÓN'],
            ['id' => '28','categoria_id' => '12','nombre' => 'REPARACIÓN'],
            ['id' => '29','categoria_id' => '13','nombre' => 'DOTACIÓN'],
            ['id' => '30','categoria_id' => '14','nombre' => 'DOTACIÓN'],
            ['id' => '31','categoria_id' => '15','nombre' => 'ADQUISICIÓN DE INSUMOS'],
            ['id' => '32','categoria_id' => '16','nombre' => 'CRIA Y ENGORDE'],
        ]);
    }
}