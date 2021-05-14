<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\Node\Stmt\Switch_;

class User extends Authenticatable
{
    use Notifiable;

    public    $timestamps = true;
    protected $table      = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'birth', 'address_id', 'gender', 'cpf', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }
    
    public function userTelephoneses()
    {
        return $this->hasMany(UserTelephones::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function getFormattedCpfAttribute()
    {
        $sCpf = $this->attributes['cpf']; 

        return substr($sCpf, 0, 3) . '.' . substr($sCpf, 3, 3) . '.' .
               substr($sCpf, 6, 3) . '-' . substr($sCpf, 9, 2);
    }

    public function getFormattedGenderAttribute()
    {
        $sGender = $this->attributes['gender']; 

        switch ($sGender) {
            case '0':
                $variableReturn = 'Masculino';
                break;
            case '1':
                $variableReturn = 'Feminino';
                break;
            case '2':
                $variableReturn = 'Outros';
                break;            
            default:               
                $variableReturn = 'Undefined';
                break;
        }

        return $variableReturn;
    }

    public function getFormattedPhoneAttribute()
    {
        $sPhone = $this->attributes['phone'];

        return '(' . substr($sPhone, 0, 2) . ') ' . substr($sPhone, 2 , 4) . '-' . substr($sPhone, 6, 4);
    }

    public function getFormattedBirthAttribute()
    {
        $sBirth = explode('-', $this->attributes['birth']);
        
        if (count($sBirth) === 3) 
        {
            return $sBirth[2] . '/' . $sBirth[1] . '/' . $sBirth[0];
        } 
        else
        {
            return '';
        }        
    }

}