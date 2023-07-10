<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $table = 'categories';

    public function color()
{
    return $this->belongsTo(Color::class);
}
    public function pod_category()
{
    return $this->hasMany(PodCategory::class);
}
}
