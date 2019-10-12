<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.adminIndex', compact('products'));
    }

    public function create()
    {
        return view('admin.createProduct');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        //upload file hehe
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }
        $product->price = $request->input('price');
        $product->price_old = $request->input('price_old');
        $product->detail_product = $request->input('detail_product');
        $product->save();
        Session::flash('success', 'Tạo mới thành công');
        return redirect()->route('products.index');

    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.editProduct', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products->name = $request->input('name');
        if ($request->hasFile('image')) {
            //xoa anh cu neu co
            $currentImg = $products->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            //them anh moi sau khi xoa
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $products->image = $path;
        }
        $products->price = $request->input('price');
        $products->price_old = $request->input('price_old');
        $products->detail = $request->input('detail_product');
        $products->save();
        return redirect()->route('products.index');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $image = $product->image;
        if ($image) {
            Storage::delete('/public/' . $image);
        }
        $product->delete();
        Session::flash('success', 'Xoa thanh cong');
        return redirect()->route('products.index');
    }

//show san pham danh cho user
    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view('show', compact(['products']));
    }

    public function main()
    {
        return view('main');
    }

    //user
    public function home()
    {
        $products = Product::all();
        return view('home-page.index', compact('products'));
    }

    public function autho()
    {
        return view('admin.adminList');
    }

}
