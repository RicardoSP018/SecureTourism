<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administradore extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'administradores';

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
    protected $fillable = ['nombre', 'correo', 'contrasena', 'telefono', 'usuario_id'];

    public function Usuarios()
    {
        return $this->belongsTo('App\Usuario');
    }
    public function Agencias()
    {
        return $this->hasOne('App\Agencia');
    }
    
}
