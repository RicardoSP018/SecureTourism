<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promociones';

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
    protected $fillable = ['nombre', 'requsitos', 'precio', 'fechaExpiracion'];

    public function paquete()
    {
        return $this->belongsTo('App\Paquete');
    }
    
}
