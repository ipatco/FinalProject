<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class Categories extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:categories'],
            'icon' => ['required'],
            'status' => ['required'],
        ]);

        $path = $request->file('icon')->store('uploads/category');

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'parent' => $request->parent,
            'icon' => $path,
            'status' => $request->status,
        ]);
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'status' => ['required'],
        ]);
        if ($request->hasFile('icon')) {
            $path = $request->file('icon')->store('uploads/category');

            Category::find($id)->update([
                'icon' => $path,
            ]);
        }

        Category::find($id)->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'parent' => $request->parent,
            'status' => $request->status,
        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        (new Category())->find($id)->delete();
        return redirect()->back();
    }
}
