<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{  
    public function generateNewsManagerPage () {
        return view('layouts.newsManager');
    }
    
    public function addNews (request $request) {
        $name = $request->input('addName');
        $path = $request->file('addImg')->store('public/newsImages');
        DB::table('news')->insert(['name' => $name,
                                   'srcImg' => $path]);
        return view('layouts.newsManager');
    }    
}
