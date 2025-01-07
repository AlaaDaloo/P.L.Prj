<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_status',
        'payment_status',
        'total_price',
        'final_bill',
        'location',
        'tax',
        'delivery_charge',
    ];

    public function products() {
        return $this->belongsToMany(product::class, 'product_order');
    }
}
