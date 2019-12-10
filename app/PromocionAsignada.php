<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromocionAsignada extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promocion_asignadas';

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

    public function paquetes()
    {
        return $this->belongsTo('App\Paquete');
    }
    public function promocions()
    {
        return $this->belongsTo('App\Promocion');
    }
    
}
