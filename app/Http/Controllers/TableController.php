<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        return view('tables.index', compact('tables'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|unique:tables']);
        Table::create($request->all());
        return redirect()->back()->with('success', 'Table created successfully.');
    }

    public function update(Request $request, $id)
    {
        $table = Table::findOrFail($id);
        $table->update($request->all());
        return redirect()->back()->with('success', 'Table updated successfully.');
    }

    public function destroy($id)
    {
        Table::destroy($id);
        return redirect()->back()->with('success', 'Table deleted successfully.');
    }

    public function checkAvailability()
    {
        $availableTables = Table::where('status', 'available')->get();
        return response()->json($availableTables);
    }
}
