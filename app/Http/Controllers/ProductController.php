<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\category;

class ProductController extends Controller
{   /*
    public function __construct($id, $name, $category, $image, $description,
            $price, $discount) {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
    }
 * 
 */
    
    public function generateProductManagerPage (){
        return view('layouts.productManager');
    }
    
    public function addCategory (){
        
        return view('layouts.productManager');
    }
 
    public function deleteCategory (){
        return view('layouts.productManager');
    }
    
    public function addProduct (){
        return view('layouts.productManager');
    }
    
    public function deleteProduct (){
        return view('layouts.productManager');
    }

    public function setDiscount (){
        return view('layouts.productManager');
    }
    
}
