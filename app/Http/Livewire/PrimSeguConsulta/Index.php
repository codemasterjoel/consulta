<?php

namespace App\Http\Livewire\PrimSeguConsulta;

use App\Models\PrimSeguConsulta;
use Livewire\Component;
use App\Models\PrimSeguConsulta as consultas;
use App\Models\Parroquia as parroquia;
use App\Models\Tipo as tipo;
use App\Models\Estatus as estatus;
use App\Models\Categoria as categoria;
use App\Models\Subcategoria as subcategoria;

use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $nombre, $ente, $codigo ,$id= null;
    public $search = "";
    public $primera = null;
    public $segunda = null;
    public $modal = null;
    public $parroquias, $ejes, $circuitos, $tipos, $estatus, $categorias, $subcategorias = null;
    public $parroquiaId, $ejeId, $circuitoId, $tipoId, $estatusId, $categoriaId, $subcategoriaId = null;
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $this->parroquias = parroquia::where('parroquia_id', '<', '20000')
            ->pluck('nombre', 'id');
        $this->tipos = tipo::pluck('nombre', 'id');
        $this->estatus = estatus::pluck('nombre', 'id');
        $consultas = PrimSeguConsulta::where('circuito_id', 'like', "%$this->search%")
            ->where('id', '<>', '1')
            ->paginate(5);
        return view('livewire.prim-segu-consulta.index', ['consultas' => $consultas]);
    }
}
