<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Address.
 *
 * @package namespace App\Entities;
 */
class Address extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cep', 'description', 'numberHouse', 'neighborhood', 'complement', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function getFormattedCepAttribute()
    {
        $sCep = $this->attributes['cep']; 

        return substr($sCep, 0, 5) . '-' .  substr($sCep, 5, 3);
    }

}
