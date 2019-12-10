<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'administradors';

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
    protected $fillable = ['nombre', 'apellido', 'direccion', 'fechaNac', 'telefono', 'usuario_id'];

    public function usuarios()
    {
        return $this->belongsTo('App\Usuario');
    }
    public function agencias()
    {
        return $this->hasOne('App\Agencia');
    }
    
}
