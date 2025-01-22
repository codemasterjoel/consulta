<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrimSeguConsulta extends Model
{
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
    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }
}
