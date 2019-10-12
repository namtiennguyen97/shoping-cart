@extends('layouts.admin')

@section('title', 'Thêm sản phẩm')
@section('content')

    <div class="row">

        <div class="col-md-12">

            <h2 style="color: orangered">Thêm sản phẩm trên trang mua bán:</h2>

        </div>

        <div class="col-md-12">

            <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label >Tên sản phẩm:</label>

                    <input type="text" class=" form-control @error('name') is-invalid @enderror" name="name" >
                    @error('name')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">

                    <label >Giá gốc</label>

                    <input type="text" class="form-control  @error('price') is-invalid @enderror" rows="3" name="price" ></input>
                    @error('price')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">

                    <label >Giá sau Sale:</label>

                    <input type="text" class=" form-control @error('price_old') is-invalid @enderror" name="price_old" >
                    @error('price_old')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">

                    <label >Chi tiết sản phẩm:</label>

                    <input type="text" class=" form-control " name="detail_product" >

                </div>
                <div class="form-group">

                    <label for="exampleFormControlFile1">Image</label>

                    <input type="file" name="image" class="form-control-file">

                </div>

                <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

            </form>

        </div>

    </div>


@endsection
