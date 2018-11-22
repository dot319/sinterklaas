<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function wishes() {
        return $this->hasMany('App\Wish');
    }
}
