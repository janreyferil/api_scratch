<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Review;


class Product extends Model
{

    public function __contruct() {
        $this->middleware('auth:api',['except' => 'index','show']);
    }

    public function reviews() {
           return $this->hasMany(Review::class);
    }

    public function getNameAttribute($val) {
        return ucfirst($val);
    } 

}
