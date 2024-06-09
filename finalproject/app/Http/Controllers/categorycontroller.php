<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Profile;
use Illuminate\Http\Request;
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $categories = Category::all();
        return view('categories.index', compact('categories'));
=======
        $category = Category::all();

        return view('category.index', ["category" => $category]);
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754
    }

    public function create()
    {
<<<<<<< HEAD
        return view('categories.create');
=======
        return view('category.create');
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754
    }

    public function store(Request $request)
    {
        $request->validate([
<<<<<<< HEAD
            'name' => 'required',
            'description' => 'nullable|string',
=======
            'name' => 'required|min:4',
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754
        ]);

        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable|string',
        ]);

        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
