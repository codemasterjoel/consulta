<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Circuito as circuito;
use App\Models\Consulta as consulta;

use DB;

class Dashboard extends Component
{
    public $circuitos = null;
    public $circuitoxparroquia = null;

    public function render()
    {
        $this->circuitos = circuito::all();
        $consultas = consulta::all();
        $this->circuitoxparroquia = DB::select('SELECT COUNT(*) as circuitos, parroquias.nombre from consultas INNER JOIN parroquias on consultas.parroquia_id = parroquias.id GROUP BY parroquias.nombre ORDER BY parroquias.nombre DESC');
        return view('livewire.dashboard', ['consultas'=>$consultas]);
    }
}
