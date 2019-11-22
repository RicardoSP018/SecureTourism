<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuiasAsignado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'guias_asignados';

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

    public function Paquetes()
    {
        return $this->belongsTo('App\Paquete');
    }
    public function Guias()
    {
        return $this->belongsTo('App\Guia');
    }
    
}
