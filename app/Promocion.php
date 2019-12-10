<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promocions';

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
    protected $fillable = ['nombre', 'requisitos', 'precio', 'fechaInicio', 'fechaFinal'];

    public function promocion_asignadas()
    {
        return $this->hasMany('App\PromocionAsignada');
    }
    
}
