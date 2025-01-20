<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Circuito as circuito;
use App\Models\Consulta as consulta;

use DB;

class Dashboard extends Component
{
    public $circuitos = null;
    public $circuitoxparroquia, $circuitoxestatus, $circuitoxtipo, $circuitoxcategoria = null;

    public function render()
    {
        $this->circuitos = circuito::all();
        $consultas = consulta::all();
        $this->circuitoxparroquia = DB::select('SELECT COUNT(*) as circuitos, parroquias.nombre from consultas INNER JOIN parroquias on consultas.parroquia_id = parroquias.id GROUP BY parroquias.nombre ORDER BY parroquias.nombre DESC');
        $this->circuitoxestatus = DB::select('SELECT COUNT(*) as circuitos, estatuses.nombre from consultas INNER JOIN estatuses on consultas.estatus_id = estatuses.id GROUP BY estatuses.nombre ORDER BY estatuses.nombre DESC');
        $this->circuitoxtipo = DB::select('SELECT COUNT(*) as circuitos, tipos.nombre from consultas INNER JOIN tipos on consultas.tipo_id = tipos.id GROUP BY tipos.nombre ORDER BY tipos.nombre DESC');
        $this->circuitoxcategoria = DB::select('SELECT COUNT(*) as circuitos, categorias.nombre from consultas INNER JOIN categorias on consultas.tipo_id = categorias.id GROUP BY categorias.nombre ORDER BY categorias.nombre DESC');
        return view('livewire.dashboard', ['consultas'=>$consultas]);
    }
}
