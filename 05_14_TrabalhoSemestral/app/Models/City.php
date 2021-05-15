<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City.
 *
 * @package namespace App\Models;
 */
class City extends Model
{
    use HasFactory;

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
