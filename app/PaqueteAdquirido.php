<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaqueteAdquirido extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paquete_adquiridos';

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
    protected $fillable = ['fechaInicio', 'fechaFin', 'precio', 'turista_id', 'paquete_id'];

    public function turistas()
    {
        return $this->belongsTo('App\Turista');
    }
    public function paquetes()
    {
        return $this->belongsTo('App\Paquete');
    }
    public function dispositivo_asignados()
    {
        return $this->hasMany('App\DispositivoAsignado');
    }
    
}
