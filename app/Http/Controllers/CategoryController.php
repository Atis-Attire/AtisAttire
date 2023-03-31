<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories =  Category::all();
        return $categories;
    }

    public function category($id)
    {
        $category = Category::find($id);
        return $category;
    }

    public function deleteCategory($id)
    {
        Category::find($id)->delete();
    }

    public function newCategory(Request $request)
    {
        $category  = new Category();
        $category ->name = $request->name;
        $category ->save();
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category ->name = $request->name;
        $category ->save();
    }

    public function modells(Category $category){
        return $category->modells;
    }
}
