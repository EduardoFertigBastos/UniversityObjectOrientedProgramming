<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class City.
 *
 * @package namespace App\Entities;
 */
class City extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'state_id'];

    public $timestamps = false;
    
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class, 'id', 'city_id');
    }
}
