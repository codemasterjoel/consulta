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
    
    public $id, $circuito_id = null;
    public $proyecto_uno, $estatus_uno_id, $tipo_uno_id, $categoria_uno_id, $subcategoria_uno_id = null;
    public $proyecto_dos, $estatus_dos_id, $tipo_dos_id, $categoria_dos_id, $subcategoria_dos_id, $ente, $codigoEnte = null;
    public $search = "";
    public $modal = null;
    public $parroquias, $tipos, $estatus, $categorias, $subcategorias = null;
    public $parroquiaId, $tipoId, $estatusId, $categoriaId, $subcategoriaId = null;
    
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
        $this->categorias = Categoria::pluck('nombre', 'id');
        $this->subcategorias = Subcategoria::pluck('nombre', 'id');
        $consultas = PrimSeguConsulta::where('circuito_id', 'like', "%$this->search%")
            ->where('id', '<>', '1')
            ->paginate(5);
        return view('livewire.prim-segu-consulta.index', ['consultas' => $consultas]);
    }

    public function editar($id)
    {
        $consulta = consultas::findOrFail($id);

        $this->id = $id;
        $this->circuito_id = $consulta->circuito_id;
        $this->proyecto_uno = $consulta->proyecto_uno;
        $this->estatus_uno_id = $consulta->estatus_uno_id;
        $this->tipo_uno_id = $consulta->tipo_uno_id;
        $this->categoria_uno_id = $consulta->categoria_uno_id;
        $this->subcategoria_uno_id = $consulta->subcategoria_uno_id;
        $this->proyecto_dos = $consulta->proyecto_dos;
        $this->estatus_dos_id = $consulta->estatus_dos_id;
        $this->tipo_dos_id = $consulta->tipo_dos_id;
        $this->categoria_dos_id = $consulta->categoria_dos_id;
        $this->subcategoria_dos_id = $consulta->subcategoria_dos_id;
        $this->ente = $consulta->ente;
        $this->codigoEnte = $consulta->codigoEnte;
        $this->parroquiaId = $consulta->parroquia_id;
        $this->tipoId = $consulta->tipo_id;
        $this->estatusId = $consulta->estatus_id;
        $this->categoriaId = $consulta->categoria_id;
        $this->subcategoriaId = $consulta->subcategoria_id;

        session()->flash('success', 'success');

        $this->modal = true;
    }

    public function cerrarModal() 
    {
        $this->limpiarCampos();
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->nombre = null;
        $this->ente = null;
        $this->codigo = null;
        $this->primera = null;
        $this->segunda = null;
        $this->parroquias = null;
        $this->ejes = null;
        $this->circuitos = null;
        $this->tipos = null;
        $this->estatus = null;
        $this->categorias = null;
        $this->subcategorias = null;
        $this->parroquiaId =null;
        $this->ejeId = null;
        $this->circuitoId = null;
        $this->tipoId = null;
        $this->estatusId = null;
        $this->categoriaId = null;
        $this->subcategoriaId = null;
        $this->id = null;
    }
}
