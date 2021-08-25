<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Article extends Model
{
    public function user(){

        return $this->belongsTo(User::class);

    }

    public function comments(){

        return $this->hasMany(Comment::class);
    }

    public static function archive(){
        return DB::table("articles")
        ->select(DB::raw("YEAR(created_at) year, MONTHNAME(created_at) month, COUNT(*) article_count"))
        ->groupBy("year","month")
        ->orderBy("year", "desc")
        ->orderBy("month", "desc")
        ->get();
    }
}
