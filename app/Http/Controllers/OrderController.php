<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $order = Order::where('user_id', $user->id)->first();


        if ($order) {
            $items = $order->orderItems;
        } else {
            $items = [];
        }

        return view('order.index', compact('items'));
    }


    public function addOrder(Request $request)
    {
        $user = Auth::user();

        $cartInfo = Cart::where('user_id', $user->id)->get()->first();
        $cartItemsInfo = CartItem::where('cart_id', $cartInfo->id)->get();

        dd($cartItemsInfo);
    }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'table_id' => 'required|exists:tables,id',
    //         'status' => 'required|in:pending,completed,cancelled',
    //     ]);

    //     $order = Order::create([
    //         'table_id' => $request->table_id,
    //         'status' => $request->status,
    //         'total_price' => 0,
    //     ]);

    //     Table::where('id', $request->table_id)->update(['status' => 'occupied']);
    //     return redirect()->back()->with('success', 'Order created successfully.');
    // }

    // public function update(Request $request, $id)
    // {
    //     $order = Order::findOrFail($id);
    //     $order->update($request->all());
    //     return redirect()->back()->with('success', 'Order updated successfully.');
    // }

    // public function destroy($id)
    // {
    //     $order = Order::findOrFail($id);
    //     $order->delete();

    //     Table::where('id', $order->table_id)->update(['status' => 'available']);
    //     return redirect()->back()->with('success', 'Order cancelled successfully.');
    // }
}
