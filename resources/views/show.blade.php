@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Chi tiết sản phẩm
    </div>

    <div class="row">

        <!-- Kiểm tra biến $product được truyền sang từ ProductController -->
        <!-- Nếu biến $products không tồn tại thì hiển thị thông báo -->
        @if(!isset($products))
            <p class="text-danger">Không có sản phẩn nào.</p>
        @else
{{--            src="{{ asset('storage/' . $product->image) }}--}}
        <!-- Nếu biến $product tồn tại thì hiển thị sản phẩm -->
            <div class="col-12">
                <div class="card text-left" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: red">{{ $products->name }}</h5>
                        <img src="{{asset('storage/'.$products->image)}}" width="350" height="500">
                        <p class="card-text" style="color: red">Giá cũ: {{ $products->price_old }}$</p>
                        <p class="card-text " style="color: darkgreen">Giá mới: {{ $products->price }}$</p>
                        <p class="card-text " style="color: darkred">Thông tin: {{ $products->detail_product }}</p>
                        <!-- Nút XEM chuyển hướng người dùng quay lại trang danh sách sản phẩm -->
                        <a href="{{ route('home.index') }}" class="btn btn-primary">< Quay lại </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
