<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

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
    protected $fillable = ['username', 'correo', 'contrasena', 'tipo'];

    public function Administradores()
    {
        return $this->hasOne('App\Administradore');
    }
    public function Turistas()
    {
        return $this->hasOne('App\Turista');
    }
    
}
