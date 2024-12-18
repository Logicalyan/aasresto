<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request, $orderId)
    {
        $request->validate([
            'payment_method' => 'required|in:cash,transfer',
            'amount_paid' => 'required|numeric|min:0',
        ]);

        $order = Order::findOrFail($orderId);
        $changeGiven = $request->amount_paid - $order->total_price;

        Payment::create([
            'order_id' => $orderId,
            'amount_paid' => $request->amount_paid,
            'change_given' => $changeGiven > 0 ? $changeGiven : 0,
            'payment_method' => $request->payment_method,
        ]);

        $order->update(['status' => 'completed']);
        return redirect()->back()->with('success', 'Payment processed successfully.');
    }
}
