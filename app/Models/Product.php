<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'location', 'type','amount','description','images','availability','contactNo'
    ];
    
   
    public function house(){

        return $this->belongsTo(House::class);

    }

    public function land(){

        return $this->belongsTo(Land::class);

    }

    public function apartment(){

        return $this->belongsTo(Apartment::class);

    }

    public function user(){

        return $this->belongsTo(User::class);
        
    }


}
