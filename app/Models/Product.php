<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'stock', 'price', 'category_id', 'image'];
    use HasFactory;
    public function Category(){
        return $this->hasOne(Category::class);
    }
}
