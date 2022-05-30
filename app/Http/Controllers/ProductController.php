<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function getProducts($id){
        $products=Product::where('category_id','=',$id)->get();
        return view('products')->with('products',$products);
    }
    public function addProduct(){
        $categories=Category::all();
        return view('addProduct')->with('categories',$categories);
    }
    public function createProduct(Request $request){
        $product=Product::create([
            'description' =>$request->product,
            'price' =>$request->price,
            'category_id' =>$request->category_id,
        ]);
        return "Product created successfully!!";
    }
    public function deleteProduct($id){
        $product=Product::where('id',$id)->delete();
        return "Product deleted Successfully!";
    }
    public function editProduct($id){
        $product=Product::find($id);
        $categories=Category::all();
        //return view('editProduct', compact('product'))->with('categories',$categories);
         return view('editProduct')->with('product',$product)->with('categories',$categories);
    }
    public function updateProduct(Request $request,$id){
        $product = Product::find($id);
        $product->description =  $request->product;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();
        return "Product updated successfully!";
    }
}
