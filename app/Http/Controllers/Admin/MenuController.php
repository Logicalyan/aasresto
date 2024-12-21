<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $count = '';

        // Periksa apakah user terautentikasi
        if (auth()->check()) {
            $user = auth()->user();
            $cart = Cart::where('user_id', $user->id)->first();

            if ($cart) {
                $count = $cart->cartItems->sum('quantity'); // Hitung total item di keranjang
            }
        }
        $menus = Menu::all();
        $categories = Category::all();

        return view('menu.index', compact(['menus', 'categories', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|string|min:5|unique:menus',
            'price'     => 'required|numeric',
            'desc'     => 'required',
            'stock'   => 'required|numeric',
            'category_id'   => 'required|numeric',
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/menus', $image->hashName());

        //create post
        Menu::create([
            'name'     => $request->name,
            'price'   => $request->price,
            'stock'   => $request->stock,
            'category_id'  => $request->category_id,
            'desc'     => $request->desc,
            'image'     => $image->hashName(),
        ]);

        //redirect to index
        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'     => 'string|min:5',
            'price'     => 'numeric',
            'stock'     => 'numeric',
            'category_id' => 'numeric',
            'desc'     => 'string',
            'image'     => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $menu = Menu::findOrFail($id);

        if(request()->hasFile('image')){

            $image = $request->file('image');
            $image->storeAs('public/menus', $image->hashName());

            Storage::delete('public/menus/'.$menu->image);

            $menu->update([
            'name'     => $request->name,
            'price'         => $request->price,
            'stock'         => $request->stock,
            'category_id'   => $request->category_id,
            'desc'     => $request->desc,
            'image'    => $image->hashName(),
            ]);
        } else {
            $menu->update([
            'name'     => $request->name,
            'price'         => $request->price,
            'stock'         => $request->stock,
            'category_id'   => $request->category_id,
            'desc'     => $request->desc,
            ]);
        }

        //redirect to index
        return redirect()->back()->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        //delete image
        Storage::delete('public/menus/'. $menu->image);

        //delete menu
        $menu->delete();

        //redirect to index
        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
