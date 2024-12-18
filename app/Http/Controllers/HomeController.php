<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('menu')->get();
        $menus = Menu::with('category')->get();
        $count = 0;

        // Periksa apakah user terautentikasi
        if (auth()->check()) {
            $user = auth()->user();
            $cart = Cart::where('user_id', $user->id)->first();

            if ($cart) {
                $count = $cart->cartItems->sum('quantity'); // Hitung total item di keranjang
            }
        }

        // Kirim data yang diperlukan ke view
        return view('index', compact('categories', 'menus', 'count'));
    }

    public function detailMenu($id)
    {
        $categories = Category::with('menu')->get();
        $menu = Menu::find($id);

        return view('details.index', compact('menu', 'categories'));
    }
}
