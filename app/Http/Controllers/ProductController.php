<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{  
    public function generateProductManagerPage (){
        return view('layouts.productManager');
    }
    
    public function addCategory (request $request){
        $categoryName = $request->input('addCategory');
        DB::table('categorys')->insert(['name' => $categoryName]);
        return view('layouts.productManager');
    }
 
    public function deleteCategory (request $request){
        $deleteThisCategory = $request->input('deleteThisCategory');
        DB::table('categorys')->where('name', '=', $deleteThisCategory)->delete();
        return view('layouts.productManager');
    }
    
    public function addProduct (request $request){
        $name = $request->input('name');
        $category = $request->input('selectCategory');
        $description = $request->input('description');
        $price = $request->input('price');
        $longDescription = $request->input('longDescription');
        $filename = "../storage\app\public\longDescription\\$category-$name.txt";
        $file = fopen($filename, "w");
        $file = fwrite($file, $longDescription);
        $longDescription = "public\longDescription\\$category-$name.txt";
        $path = $request->file('image')->store('public/imageForProducts');
        DB::table('products')->insert(['name' => $name, 
                                       'category' => $category, 
                                       'price' => $price, 
                                       'description' => $description,
                                       'longDescription' => $longDescription,
                                       'image' => $path]);
        return view('layouts.productManager');
    }
    
    public function deleteProduct (request $request){
        if ($request->input('selectedProduct')!== null){
            $selectedProductID = $request->input('selectedProduct');
            DB::table('products')->where('id', '=', $selectedProductID)->delete();
            return view('layouts.productManager');
        }
        else {
            $category = $request->input('selectedCategoryForDelProduct');
            $status = 'selected';
            $products = DB::table('products')->where('category', '=', $category)->get();
        }
        return view('layouts.productManager')->with(['status' => $status, 'products' => $products]);
    }

    public function setDiscount (){
        return view('layouts.productManager');
    }
    
    public function getProductsPage ($categoryName) {
        $products = DB::table('products')->where('category', '=', $categoryName)->get();
        return view('layouts.products')->with(['products' => $products]);
    }
    
    public function getProductPage ($category, $productID) {
        $product = DB::table('products')->where('id', '=', $productID)->get();
        $longDescription = $product[0]->longDescription;
        $longDescription = file("../storage\app\\$longDescription");
        return view('layouts.product')->with(['product'=>$product, 'longDescription' => $longDescription]);
    }
    
}
