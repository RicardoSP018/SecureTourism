<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categorias';

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
    protected $fillable = ['nombre', 'descripcion', 'imagen', 'paquete_id'];

    public function paquetes()
    {
        return $this->belongsTo('App\Paquete');
    }
    
}
