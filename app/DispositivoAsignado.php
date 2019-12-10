<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DispositivoAsignado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dispositivo_asignados';

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
    protected $fillable = ['Inicio', 'Final', 'dispositivo_id', 'paquete_adquiridos_id'];

    public function dispositivos()
    {
        return $this->belongsTo('App\Dispositivo');
    }
    public function paquete_adquiridos()
    {
        return $this->belongsTo('App\PaqueteAdquirido');
    }
    public function waypoints()
    {
        return $this->hasMany('App\Waypoint');
    }
    
}
