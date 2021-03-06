<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turista extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'turistas';

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
    protected $fillable = ['nombre', 'apellido', 'telefono', 'email', 'usuario_id'];

    public function paquete_adquiridos()
    {
        return $this->hasMany('App\PaqueteAdquirido');
    }
    public function usuarios()
    {
        return $this->belongsTo('App\Usuario');
    }
    
}
