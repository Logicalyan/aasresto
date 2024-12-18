<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function store(Request $request)
    {

        $validate = $request->validate([

            'name'     => 'required|string|min:5'
        ]);

        Category::create($validate);

        //redirect to index
        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
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
        ]);

        $category = Category::findOrFail($id);

            $category->update([
            'name'     => $request->name,
            ]);


        //redirect to index
        return redirect()->back()->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        //delete category
        $category->delete();

        //redirect to index
        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
