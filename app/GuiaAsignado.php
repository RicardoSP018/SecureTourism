<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuiaAsignado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'guia_asignados';

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
    protected $fillable = ['paquete_id', 'guia_id'];

    public function paquetes()
    {
        return $this->belongsTo('App\Paquete');
    }
    public function guias()
    {
        return $this->belongsTo('App\Guia');
    }
    
}
