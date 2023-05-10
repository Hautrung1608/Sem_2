<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'cate_id','origin','quantity','price','image','status'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
}
