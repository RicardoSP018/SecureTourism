<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'suscripcions';

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

    public function servicios()
    {
        return $this->hasMany('App\Servicio');
    }
    public function agencias()
    {
        return $this->belongsTo('App\Agencia');
    }
    
}
