<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Individual
 *
 * @property $id
 * @property $nombre
 * @property $game_id
 * @property $celular
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Individual extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'game_id' => 'required',
		'celular' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','game_id','celular','correo'];



}
