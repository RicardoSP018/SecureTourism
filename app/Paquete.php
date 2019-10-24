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
    protected $fillable = ['Nombre', 'descripcion', 'contenido', 'destino', 'precio', 'imagen', 'categoria_id', 'promocion_id', 'guia_id'];

    public function categorias()
    {
        return $this->belongsTo('App\Categoria');
    }
    public function guias()
    {
        return $this->hasMany('App\Guia');
    }
    public function promociones()
    {
        return $this->hasOne('App\Promocion');
    }
    
}
