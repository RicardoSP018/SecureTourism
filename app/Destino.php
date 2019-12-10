<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'destinos';

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
    protected $fillable = ['nombre', 'cupoMax', 'paquete_id'];

    public function paquetes()
    {
        return $this->belongsTo('App\Paquete');
    }
    
}
