<?php

namespace App\Services;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;

class OrderService
{
    public function createOrder(array $data, int $userId): Order
    {
        $totalPrice = 0;

        foreach ($data['products'] as $productData) {
            $product = Product::findOrFail($productData['id']);
            $totalPrice += $product->price * $productData['quantity'];
        }

        $tax = $totalPrice * 0.012; 
        $deliveryCharge = $totalPrice * 0.03; 
        $finalBill = $totalPrice + $tax + $deliveryCharge;

        $user = User::findOrFail($userId);

        $order = Order::create([
            'order_status' => 'Pending',
            'payment_status' => 'Unpaid',
            'location' => $user->location,
            'total_price' => $totalPrice,
            'tax' => $tax,
            'delivery_charge' => $deliveryCharge,
            'final_bill' => $finalBill,
            'user_id' => $userId,
        ]);

        foreach ($data['products'] as $productData) {
            $order->products()->attach($productData['id'], [
                'quantity' => $productData['quantity'], 
            ]);
        }

        return $order;
    }
}
