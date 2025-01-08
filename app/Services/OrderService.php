<?php

namespace App\Services;

use App\Models\Product_Order_Pivot;
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
            $newQuantity = $product->count - $productData['quantity'];
            $product->update(['count' => $newQuantity]);
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
    public function updateOrder(array $data, int $orderId): Order
    {
        $order = Order::findOrFail($orderId);
        $totalPrice = 0;
        foreach ($data['products'] as $productData) {
            $product = Product::findOrFail($productData['id']);
            $totalPrice += $product->price * $productData['quantity'];
            $lastQuantity = Product_Order_Pivot::where('order_id' , $orderId)->value('quantity');
            $product->count += $lastQuantity;
            $newQuantity = $product->count - $productData['quantity'];
            $product->update(['count' => $newQuantity]);
        }
        $tax = $totalPrice * 0.012;
        $deliveryCharge = $totalPrice * 0.03;
        $finalBill = $totalPrice + $tax + $deliveryCharge;

        $order->update([
            'total_price' => $totalPrice,
            'tax' => $tax,
            'delivery_charge' => $deliveryCharge,
            'final_bill' => $finalBill,
        ]);
        $order->products()->detach();
        foreach ($data['products'] as $productData) {
            $order->products()->attach($productData['id'], [
                'quantity' => $productData['quantity'],
            ]);
        }
        return $order;
    }

    public function deleteOrder(int $order_id)
    {
        $order = Order::findOrFail($order_id);
        $productQuantity = Product_Order_Pivot::where('order_id' , $order_id)->value('quantity');
        $product_id = Product_Order_Pivot::where('order_id' , $order_id)->value('product_id');
        $productCount = Product::where('id', $product_id)->value('count');
        $count = $productCount + $productQuantity;
        $product = Product::where('id' , $product_id);
        $product->update(['count' => $count]);
        $order->delete();
    }
}
