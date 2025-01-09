<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function createOrdre(Request $request)
    {
        $validated = $request->validate([
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        $userId = Auth::id();

        try {
            $order = $this->orderService->createOrder($validated, $userId);

            return response()->json([
                'message' => 'Order created successfully.',
                'order' => $order,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create order.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function updateOrdre(Request $request, $order_id)
    {
        $validated = $request->validate([
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer',
        ]);

        try {
            $order = $this->orderService->updateOrder($validated, $order_id);

            if (is_array($order) && isset($order['status_code'])) {
                return response()->json([
                    'message' => $order['message'],
                ], $order['status_code']);
            }

            return response()->json([
                'message' => 'Order updated successfully.',
                'order' => $order,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update order.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function deleteOrdre($order_id)
    {
        try {
            $result = $this->orderService->deleteOrder($order_id);

            if (is_array($result) && isset($result['message'], $result['status_code'])) {
                return response()->json(['message' => $result['message']], $result['status_code']);
            }

            return response()->json([
                'message' => 'Order marked as deleted successfully.',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to mark order as deleted.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function getUserOrders(Request $request)
    {
        $userId = Auth::id();
        $orders = $this->orderService->getUserOrders($userId);
        if (isset($orders['message'])) {
            return response()->json($orders, 404);
        }
        return response()->json($orders, 200);
    }
}
