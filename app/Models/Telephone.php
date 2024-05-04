<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'id_hotel',
    ];
    

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'id_hotel', 'id');
    }
}

