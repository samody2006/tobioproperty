<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'toilets','rooms','nearestSchool','nearestMall','nearestBusStop'
    ];
    
    public function product(){

        return $this->belongsTo(Product::class);

    }
}
