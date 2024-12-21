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
use PhpParser\Node\Stmt\Return_;

class OrderController extends Controller
{

    public function index(){
        $user = auth()->user();
        $orders = Order::where('user_id', $user->id)->get();
        $orderItems = OrderItem::with('order')->get();
        $count = '';

        if (auth()->check()) {
            $cart = Cart::where('user_id', $user->id)->first();
            if ($cart) {
                $count = $cart->cartItems->sum('quantity'); // Hitung total item di keranjang
            }
        }

        return view('order.history', compact('orders', 'count', 'orderItems'));

    }

    public function create()
    {
        $user = Auth::user();
        $tables = Table::all();
        $cart = Cart::where('user_id', $user->id)->get()->first();
        $items = $cart->cartItems;

        return view('order.create', compact('items', 'cart', 'tables'));
    }


    public function store(Request $request)
    {
        $user = Auth::user();

        $cart = Cart::where('user_id', $user->id)->get()->first();
        $cartItem = $cart->cartItems;
        $total = $cartItem->sum('subtotal');


        $validated = $request->validate([
            'customer_name' => 'required|string',
            'paid_amount' => 'required|numeric',
            'table_id' => 'required',
            'review' => 'nullable|string',
        ]);

        $order = Order::create([
            'customer_name'=> $request->customer_name,
            'review'=> $request->review,
            'paid_amount' => $request->paid_amount,
            'table_id' => $request->table_id,
            'user_id'=> $user->id,
            'total_price' => $total,
            'change_amount' => $request->paid_amount - $total,
            ]);

            foreach ($cartItem as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'menu_id' => $item->menu_id,
                    'quantity' => $item->quantity,
                    'price' => $item->menu->price,
                    'subtotal' => $item->subtotal,
                ]);
            }
            $cart->delete();

            return redirect()->route('order.show', $order->id);
    }

    public function show($id){
        $order = Order::with(['orderItems.menu' => fn($menu) => $menu->withTrashed()])->find($id);

        return view('order.show', compact('order'));

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
