<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    protected $fillable = ['status', 'pro_id', 'quantity','price','created_at'];
    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Product::class, 'pro_id', 'id');
    }
}
