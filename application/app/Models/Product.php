<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        // 한개의 상품은 여러 주문에서 쓰일 수 있다.
        return $this->belongsTo(Order::class);
    }
}
