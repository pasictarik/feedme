<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends \TCG\Voyager\Models\Category
{
    protected $fillable = [
        'name', 'slug', 'order',
    ];


    public function meals() {
        return $this->hasMany(Meal::class);
    }
}
