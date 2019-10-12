@extends('layouts.admin')

@section('title', 'Chỉnh sửa thông tin sản phẩm')


@section('content')
    <div class="row">

        <div class="col-md-12">

            <h2>Chỉnh sửa thông tin sản phẩm</h2>

        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('products.update', $products->id) }}" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label>Tên sản phẩm:</label>

                    <input type="text" class="form-control" name="name" value="{{ $products->name }}" required>

                </div>

                <div class="form-group">

                    <label>Giá</label>

                    <input type="text" class="form-control" rows="3" name="price" value="{{ $products->price }}"  required>

                </div>
                <div class="form-group">

                    <label>Giá sau Sale:</label>

                    <input type="text" class="form-control" rows="3" name="price_old" value="{{ $products->price_old }}"  required>

                </div>
                <div class="form-group">

                    <label>Thông tin chi tiết</label>

                    <input type="text" class="form-control" rows="3" name="detail_product" value=" {{$products->detail_product}}  "  required>

                </div>
                <div class="form-group">

                    <label>Ảnh bìa</label>

                    <input type="file" name="image" class="form-control-file" >

                </div>

                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

            </form>

        </div>

    </div>
@endsection
