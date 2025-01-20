<?php

namespace App\Http\Livewire\Consulta;

use Livewire\Component;

use App\Models\Consulta as consulta;
use App\Models\Parroquia as parroquia;
use App\Models\Eje as eje;
use App\Models\Circuito as circuito;
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
        $this->parroquias = parroquia::pluck('nombre', 'id');
        // $this->ejes = eje::pluck('nombre', 'id');
        // $this->circuitos = circuito::pluck('nombre', 'id');
        $this->tipos = tipo::pluck('nombre', 'id');
        $this->estatus = estatus::pluck('nombre', 'id');
        // $this->categorias = categoria::pluck('nombre', 'id');
        // $this->subcategorias = subcategoria::pluck('nombre', 'id');
        $consultas = consulta::where('nombre', 'like', "%$this->search%")
        ->paginate(5);

        return view('livewire.consulta.index', ['consultas'=>$consultas]);
    }
    
    public function crear()
    {
        $this->limpiarCampos();
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

    public function updatedParroquiaId($id)
    {
        $this->ejeId = null;
        $this->circuitoId = null;
        $this->ejes = eje::where('parroquia_id', $id)->pluck('nombre', 'id');
        $this->circuitos = circuito::where('parroquia_id', $id)->pluck('nombre', 'id');
    }

    public function updatedTipoId($id)
    {
        $this->categoriaId = null;
        $this->subcategoriaId = null;
        $this->categorias = categoria::where('tipo_id', $id)->pluck('nombre', 'id');
    }

    public function updatedCategoriaId($id)
    {
        $this->subcategoriaId = null;
        $this->subcategorias = subcategoria::where('categoria_id', $id)->pluck('nombre', 'id');
    }

    public function guardar() 
    {
        consulta::updateOrCreate(['id' => $this->id],
        [
            'nombre'        => $this->nombre,
            'ente'          => $this->ente,
            'codigoEnte'    => $this->codigo,
            'primera'       => $this->primera,
            'segunda'       => $this->segunda,
            'parroquia_id'  => $this->parroquiaId,
            'eje_id'        => $this->ejeId,
            'circuito_id'   => $this->circuitoId,
            'tipo_id'       => $this->tipoId,
            'estatus_id'    => $this->estatusId,
            'categoria_id'  => $this->categoriaId,
            'subcategoria_id'=>$this->subcategoriaId,
        ]);
        $this->cerrarModal();
        $this->limpiarCampos();
    }
}
