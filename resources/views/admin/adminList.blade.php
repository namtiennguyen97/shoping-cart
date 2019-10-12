@extends('layouts.master')
@section('content')
    <h2>Danh sách chức năng Admin</h2>
    <div class="row">
            <div class="col-12">
                <div class="card text-left" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: red">Quản lý sản phẩm Shop</h5>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">Truy cập </a>
                        <a href="{{ route('home.main') }}" class="btn btn-primary">< Quay lại </a>
                    </div>
                </div>
            </div>

    </div>
@endsection
