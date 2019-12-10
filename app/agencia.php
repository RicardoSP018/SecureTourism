<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agencias';

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
    protected $fillable = ['nombreAgencia', 'nombreDueno', 'telefono', 'descripcion', 'direccion', 'correo', 'redesSociales', 'administrador_id'];

    public function suscripcions()
    {
        return $this->hasOne('App\Suscripcion');
    }
    public function administradors()
    {
        return $this->belongsTo('App\Administrador');
    }
    public function guias()
    {
        return $this->hasMany('App\Guia');
    }
    
}
