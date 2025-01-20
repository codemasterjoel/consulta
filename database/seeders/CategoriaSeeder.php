<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        Categoria::insert([
            ['id' => '1','tipo_id' => '1','nombre' => 'ACERAS, BROCALES Y CUNETAS'],
            ['id' => '2','tipo_id' => '1','nombre' => 'ESCALERAS'],
            ['id' => '3','tipo_id' => '1','nombre' => 'ASFALTADO'],
            ['id' => '4','tipo_id' => '2','nombre' => 'ELECTRICIDAD'],
            ['id' => '5','tipo_id' => '2','nombre' => 'GAS'],
            ['id' => '6','tipo_id' => '2','nombre' => 'MANEJO INTEGRAL DEL AGUA'],
            ['id' => '7','tipo_id' => '3','nombre' => 'AREAS COMUNES'],
            ['id' => '8','tipo_id' => '3','nombre' => 'CENTRO CULTURAL, CASA COMUNAL'],
            ['id' => '9','tipo_id' => '3','nombre' => 'CENTROS DE SALUD'],
            ['id' => '10','tipo_id' => '3','nombre' => 'EDUCACIÓN'],
            ['id' => '11','tipo_id' => '3','nombre' => 'VIVIENDAS'],
            ['id' => '12','tipo_id' => '4','nombre' => 'ASCENSORES'],
            ['id' => '13','tipo_id' => '4','nombre' => 'CENTROS DE SALUD'],
            ['id' => '14','tipo_id' => '4','nombre' => 'LINEA BLANCA'],
            ['id' => '15','tipo_id' => '4','nombre' => 'VEHICULOS'],
            ['id' => '16','tipo_id' => '5','nombre' => 'AGROPECUARIO'],
        ]);
    }
}
