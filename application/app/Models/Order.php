<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_email','product_id'];

    public function user()
    {
        // 여러 주문은 한명의 유저에게서 주문된다.
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        // 한가지 주문으로 여러 상품을 시킬 수 있다.
        return $this->hasMany(Order::class);
    }
}
