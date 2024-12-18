<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;


class StockController extends Controller
{
    public function reduceStock($menuId, $quantity)
    {
        $menu = Menu::findOrFail($menuId);

        if ($menu->stock < $quantity) {
            return response()->json(['error' => 'Insufficient stock'], 400);
        }

        $menu->update(['stock' => $menu->stock - $quantity]);
    }

    public function restock(Request $request, $menuId)
    {
        $request->validate(['quantity' => 'required|integer|min:1']);
        $menu = Menu::findOrFail($menuId);
        $menu->update(['stock' => $menu->stock + $request->quantity]);

        return redirect()->back()->with('success', 'Stock updated successfully.');
    }
}


