<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function products() {
        return $this->belongsToMany(product::class, 'product_and_order_pivots');
    }
}
