<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class State.
 *
 * @package namespace App\Models;
 */
class State extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'initials'];

    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
