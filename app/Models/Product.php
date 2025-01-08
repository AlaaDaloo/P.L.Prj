<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['count'];
    public function market(){
        return $this->belongsTo(Market::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'product_and_order_pivots');
    }

    public function usersFavorite()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
