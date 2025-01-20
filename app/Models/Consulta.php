<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Parroquia;
use App\Models\Eje;
use App\Models\Circuito;
use App\Models\Estatus;
use App\Models\Tipo;
use App\Models\Categoria;
use App\Models\Subcategoria;

class Consulta extends Model
{
    protected $fillable =
    [
        'nombre',
        'ente',
        'codigoEnte',
        'primera',
        'segunda',
        'parroquia_id',
        'eje_id',
        'circuito_id',
        'tipo_id',
        'estatus_id',
        'categoria_id',
        'subcategoria_id',
    ];

    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }
    public function eje()
    {
        return $this->belongsTo(Eje::class);
    }
    public function circuito()
    {
        return $this->belongsTo(Circuito::class);
    }
    public function estatus()
    {
        return $this->belongsTo(Estatus::class);
    }
    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::class);
    }
}
