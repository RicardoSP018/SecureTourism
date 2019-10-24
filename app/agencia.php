<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agencia extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agencias';

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
    protected $fillable = ['NombreAgencia', 'NombreDueno', 'Telefono', 'Descripcion', 'Direccion', 'usuario_id', 'suscripcion_id'];

    public function usuarios()
    {
        return $this->belongsTo('App\Usuario');
    }
    public function suscripciones()
    {
        return $this->hasOne('App\Suscripcion');
    }
    
}
