<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $fillable = [
        'size','nearestSchool','nearestMall','nearestBusStop'
    ];
    
    public function product(){

        return $this->belongsTo(Product::class);

    }
}
