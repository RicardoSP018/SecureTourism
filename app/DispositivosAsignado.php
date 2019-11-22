<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DispositivosAsignado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dispositivos_asignados';

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
    protected $fillable = ['Inicio', 'Final', 'dispositivo_id', 'paqueteAd_id'];

    public function Dispositivos()
    {
        return $this->belongsTo('App\Dispositivo');
    }
    public function PaquetesAdquiridos()
    {
        return $this->belongsTo('App\PaquetesAdquirido');
    }
    public function Waypoints()
    {
        return $this->hasMany('App\Waypoint');
    }
    
}
