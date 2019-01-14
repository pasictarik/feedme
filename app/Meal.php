<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;

class Meal extends Model
{
    protected $fillable = [
        'name', 'price', 'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function deliveries() {
        return $this->belongsToMany(Delivery::class, 'meals_deliveries');
    }
}
