<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->search;

        $categories = Category::with(['menu' => function ($menus) use ($keyword) {
            return $menus->where('name', 'like', '%' . $keyword . '%');
        }])->when(isset($keyword), function ($query) use ($keyword) {
            return $query->whereHas('menu', function ($menus) use ($keyword) {
                $menus->where('name', 'like', '%' . $keyword . '%');
            });
        })->get();

        $menus = Menu::with('category')->when(
            isset($keyword),
            function ($query) use ($keyword) {
                return $query->where('name', 'like', '%' . $keyword . '%');
            }
        )->get();

        $count = '';

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

    public function search() {}
}
