<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id)->first();

        $count = 0;

        if ($cart) {
            $items = $cart->cartItems;
            $total = $items->sum('subtotal');
            $count = $items->sum('quantity');
        } else {
            $items = [];
            $total = 0;
        }

        return view('cart.index', compact('items', 'count', 'total'));
    }


    public function addCart(Request $request, $menu_id)
    {
        $user = auth()->user(); // Mengambil user yang sedang login
        if (!$user) {
            // Jika user belum login, arahkan ke halaman login
            return redirect()->route('login')->with('error', 'You need to be logged in.');
        }
        // Cari keranjang yang ada, atau buat yang baru
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        // Cari menu yang dipilih
        $menu = Menu::findOrFail($menu_id);

        // Tambahkan item ke dalam cart
        CartItem::create([
            'cart_id' => $cart->id,
            'menu_id' => $menu->id,
            'quantity' => $request->quantity,
            'price' => $menu->price,
            'subtotal' => $menu->price * $request->quantity,
        ]);

        // Kurangi stok menu
        if ($menu->stock > 0) {
            $menu->stock -= $request->quantity;
            $menu->save();
        } else {
            return back()->with('error', 'Not enough stock.');
        }

        return back()->with('success', 'Item added to cart.');
    }



    public function showCart() {

    }


    public function destroy($id) {
        $user = auth()->user(); // Pastikan pengguna sudah login
        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to be logged in.');
        }

        // Cari item di cart berdasarkan ID
        $cartItem = CartItem::find($id);

        if (!$cartItem) {
            return back()->with('error', 'Item not found.');
        }

        // Pastikan item tersebut milik cart dari user yang sedang login
        $cart = $cartItem->cart;
        if ($cart->user_id !== $user->id) {
            return back()->with('error', 'Unauthorized action.');
        }

        // Kembalikan stok ke menu sebelum menghapus item
        $menu = $cartItem->menu;
        $menu->stock += $cartItem->quantity; // Tambahkan stok yang sama dengan quantity item
        $menu->save();

        // Hapus item dari cart
        $cartItem->delete();

        return back()->with('success', 'Item removed from cart.');
    }
}
