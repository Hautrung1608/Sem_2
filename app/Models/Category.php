<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $fillable = ['name', 'status'];
    public $timestamps = false;

    /**
     * 
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'cate_id', 'id');
    }
    public function scopeSearch($query)
    {
        if(request()->keywordcate){
           $query = $query->where('name','like','%'.request()->keywordcate.'%');
        }
           return $query;
        
    }
}
