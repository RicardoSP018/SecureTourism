<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paquetes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'contenido', 'duracion', 'imagen'];

    public function PaquetesAdquiridos()
    {
        return $this->hasOne('App\PaquetesAdquirido');
    }
    public function Categorias()
    {
        return $this->hasMany('App\Categoria');
    }
    public function PromocionesAsignadas()
    {
        return $this->hasOne('App\Promocion');
    }
    public function Destinos()
    {
        return $this->hasOne('App\Destino');
    }
    public function GuiasAsignados()
    {
        return $this->hasMany('App\GuiasAsignado');
    }
    
}
