<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategories(){
        $categories=Category::all();
        return view('categories')->with('categories',$categories);
    }
    public function addCategory(){
        return view('addCategory');
    }
    public function createCategory(Request $request){
        $category=Category::create([
            'name' =>$request->category,
        ]);
        return "Category created successfully!!";
    }
    public function deleteCategory($id){
        $category=Category::where('id',$id)->delete();
        return "Category deleted Successfully!";
    }
}
