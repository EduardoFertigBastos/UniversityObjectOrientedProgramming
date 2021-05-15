<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Address.
 *
 * @package namespace App\Model;
 */
class Address extends Model
{
    use HasFactory;

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
