<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dispositivos';

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
    protected $fillable = ['nombre', 'alcance', 'estado', 'Imagen'];

    public function DispositivosAsignados()
    {
        return $this->hasMany('App\DispositivosAsignado');
    }
    
}
