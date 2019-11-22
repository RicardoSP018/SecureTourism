<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromocionesAsignada extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promociones_asignadas';

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
    protected $fillable = ['paquete_id', 'promocion_id'];

    public function Paquetes()
    {
        return $this->belongsTo('App\Paquete');
    }
    public function Promociones()
    {
        return $this->belongsTo('App\Promocione');
    }
    
}
