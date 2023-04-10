<?php

namespace App\Models;
use App\Models\Imag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function subCategories(){
        return $this->hasMany(SubCategory::class);
    }

    public function images(){
        return $this->morphMany(Image::class,'object');
    }
}
