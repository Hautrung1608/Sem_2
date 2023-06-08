<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['name', 'cate_id', 'origin', 'quantity', 'price', 'image', 'status'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
    /**
     * 
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bill()
    {
        return $this->hasMany(Bill::class, 'pro_id', 'id');
    }
    public function scopeSearch($query)
    {
        if(request()->keywordpro){
           $query = $query->where('name','like','%'.request()->keywordpro.'%');
        }
           return $query;
        
    }
}
