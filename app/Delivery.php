<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'user_id',
    ];

    public function meals () {
        return $this->belongsToMany(Meal::class, 'meals_deliveries');
    }

    public function user () {
        return $this->belongsTo(User::class);
    }
}

