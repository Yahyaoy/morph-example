<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongTo(Category::class);
    }

    public function porduct(){
        return $this->hasMany(Product::class);
    }
}
