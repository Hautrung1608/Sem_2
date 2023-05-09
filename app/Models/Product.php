<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'cate_id','origin','quantity','price','image','status'];
    public $timestamps = false;

    public function categories()
    {
        return $this->hasOne(Category::class, 'id', 'cate_id');
    }
}
