<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'suscripciones';

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
    protected $fillable = ['nombre', 'descripcion', 'estado', 'inicio', 'vencimiento', 'agencia_id'];

    public function Servicios()
    {
        return $this->hasMany('App\Servicio');
    }
    public function Agencias()
    {
        return $this->belongsTo('App\Agencia');
    }
    
}
