<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Purchase.
 *
 * @package namespace App\Models;
 */
class Purchase extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'coin_id', 'amount', 'price'];

    public $timestamps = true;

    public function coin()
    {
        return $this->belongsTo(Coin::class, 'coin_id', 'id');
    }

}
