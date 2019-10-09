<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home-page.index', compact('products'));
    }

    public function create(){
        return view('home-page.create');
    }

    public function show($id){
        $products = Product::findOrFail($id);
        return view('show',compact(['products']));
    }
    public function main(){
        return view('main');
    }


}
