<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'street_name',
        'house_number',
        'city',
        'zip_code',
    ];

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'id', 'id');
    }
}
