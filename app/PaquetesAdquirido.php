<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaquetesAdquirido extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paquetes_adquiridos';

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

    public function Turistas()
    {
        return $this->belongsTo('App\Turista');
    }
    public function Paquetes()
    {
        return $this->belongsTo('App\Paquete');
    }
    public function DispositivosAsignados()
    {
        return $this->hasMany('App\DispositivosAsignado');
    }
    
}
