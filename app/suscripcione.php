<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suscripcione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'suscripciones';

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
    protected $fillable = ['nombre', 'descripcion', 'precio'];

    public function agencias()
    {
        return $this->belongsTo('App\Agencia');
    }
    
}
