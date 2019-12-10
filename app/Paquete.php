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

    public function paquete_adquiridos()
    {
        return $this->hasOne('App\PaqueteAdquirido');
    }
    public function categorias()
    {
        return $this->hasMany('App\Categoria');
    }
    public function promocion_asignadas()
    {
        return $this->hasOne('App\PromocionAsignada');
    }
    public function destinos()
    {
        return $this->hasOne('App\Destino');
    }
    public function guia_asignados()
    {
        return $this->hasMany('App\GuiaAsignado');
    }
    
}
