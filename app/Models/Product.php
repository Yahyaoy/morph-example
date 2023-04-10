<?php

namespace App\Models;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function subCategory(){
        return $this->belongsTo(SubCategory::class);
    }

    public function image(){
        return $this->morphOne(Image::class,'object','object_type','object_id','id');
    }

    public function images(){
        return $this->morphMany(Image::class,'object','object_type','object_id','id');
    }


}
