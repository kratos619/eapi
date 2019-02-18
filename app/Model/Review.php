<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['product_id','customer','review','star'];

    public function product()
    {
        return $this->belongsTo('App\Model\Product');
    }
}
