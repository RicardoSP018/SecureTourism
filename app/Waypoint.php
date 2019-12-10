<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waypoint extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'waypoints';

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
    protected $fillable = ['fecha', 'hora', 'dispositivo_asignados_id'];

    public function dispositivo_asignados()
    {
        return $this->belongsTo('App\DispositivoAsignado');
    }
    
}
