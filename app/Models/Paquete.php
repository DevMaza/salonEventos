<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paquete
 *
 * @property $id
 * @property $nombre
 * @property $servicio_id
 * @property $costo
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paquete extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'servicio_id' => 'required',
		'costo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','servicio_id','costo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function serivicio()
    {
        return $this->hasOne('App\Models\Serivicio', 'id', 'servicio_id');
    }
    

}
