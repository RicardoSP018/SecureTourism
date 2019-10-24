<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'guias';

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
    protected $fillable = ['Nombre', 'apellido', 'edad', 'genero', 'precio'];

    public function paquetes()
    {
        return $this->belongsTo('App\Paquete');
    }
    
}
