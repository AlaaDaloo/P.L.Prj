<?php

namespace App\Services;

use App\Models\ProductAndOrderPivot;
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
    public function updateOrder(array $data, int $orderId)
    {
        $order = Order::findOrFail($orderId);

        if ($order->order_status !== 'Pending') {
            return [
                'message' => 'Order cannot be updated',
                'status_code' => 400,
            ];
        }

        $totalPrice = 0;
        foreach ($data['products'] as $productData) {
            $product = Product::findOrFail($productData['id']);
            $totalPrice += $product->price * $productData['quantity'];
            $product_id = $productData['id'];

            $lastQuantity = ProductAndOrderPivot::where('order_id', $orderId)
                ->where('product_id', $product_id)
                ->value('quantity');

            if ($lastQuantity == $productData['quantity']) {
                $product->update(['count' => $product->count]);
            } else {
                $product->count += $lastQuantity;
                $newQuantity = $product->count - $productData['quantity'];
                $product->update(['count' => $newQuantity]);
            }
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

            if ($productData['quantity'] == 0) {
                ProductAndOrderPivot::where('order_id', $orderId)
                    ->where('product_id', $product_id)
                    ->delete();
            }
        }

        return $order;
    }

    public function deleteOrder(int $order_id)
    {
        $order = Order::findOrFail($order_id);

        if ($order->order_status !== 'Pending') {
            return [
                'message' => 'Order cannot be deleted because it is not in a Pending status.',
                'status_code' => 400,
            ];
        }

        $orderProducts = ProductAndOrderPivot::where('order_id', $order_id)->get();

        foreach ($orderProducts as $orderProduct) {
            $product = Product::find($orderProduct->product_id);
            if ($product) {
                $product->update([
                    'count' => $product->count + $orderProduct->quantity,
                ]);
            }
        }

        $order->delete();

        return [
            'message' => 'Order marked as deleted successfully.',
            'status_code' => 200,
        ];
    }

    public function getUserOrders($userId)
    {
        $ordes = Order::where('user_id', $userId)->get();
        if ($ordes->isEmpty()) {
            return ['message' => "no orders"];
        }
        return $ordes;
    }
}
