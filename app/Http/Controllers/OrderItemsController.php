<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Menu;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    public function index(){
        
        $orderItems = OrderItem::with('menu')->get();
        return view('order-items.index', compact('orderItems'));
    }

    public function store(Request $request, $orderId)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // dd($request->all());

        $menu = Menu::findOrFail($request->menu_id);
        $subtotal = $menu->price * $request->quantity;

        OrderItem::create([
            'order_id' => $orderId,
            'menu_id' => $menu->id,
            'quantity' => $request->quantity,
            'price' => $menu->price,
            'subtotal' => $subtotal,
        ]);

        $totalPrice = OrderItem::where('order_id', $orderId)->sum('subtotal');
        Order::where('id', $orderId)->update(['total_price' => $totalPrice]);

        return redirect()->route('order-items.index')->with('success', 'Item added successfully.');
    }
}
