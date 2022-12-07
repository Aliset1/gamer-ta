<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscription
 *
 * @property $id
 * @property $nombre
 * @property $celular
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscription extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'celular' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','celular'];



}
