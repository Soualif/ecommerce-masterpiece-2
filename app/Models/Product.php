<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    // Voyager Relationship
    public function categoryId() {
        return $this->belongsTo('App\Models\Category');
    }
    // Get Product Category
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
