<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
        'email',
        'stars',
        'average_fee',
        'valuation',
        'floor_number',
    ];

    public function address(){
        return $this->hasOne(Address::class, 'id', 'id');
    }

    public function telephones(){
        return $this->hasMany(Telephone::class, 'id_hotel', 'id');
    }
    
}
