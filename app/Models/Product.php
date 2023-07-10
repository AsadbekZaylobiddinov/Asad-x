<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function additional()
    {
        return $this->hasOne(Additional::class);
    }

    public function image()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
}
