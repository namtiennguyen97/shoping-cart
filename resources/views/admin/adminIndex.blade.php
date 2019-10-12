@extends('layouts.admin')
@section('title','Admin management')
@section('content')
    <div class="col-12">
        <div class="row-12">
            <h1>Quản lý sản phẩm</h1>
        </div>
        <div class="col-12">
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>{{ \Illuminate\Support\Facades\Session::get('success') }}
                </p>
            @endif
        </div>
        <table class="table table-striped">
            <thead>
            <tr style="background-color: #636b6f">
                <th style="color: orange" scope="col">STT</th>
                <th style="color: orange" scope="col">Tên sản phẩm</th>
                <th style="color: orange" scope="col">Giá</th>
                <th style="color: orange" scope="col">Giá cũ</th>
                <th style="color: orange; margin: auto" scope="col">Thông tin chi tiết</th>
                <th style="color: orange" scope="col">Ảnh</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($products)==0)
                <tr><td colspan="4">Không có dữ liệu, cần thêm sản phẩm vào</td></tr>
            @else
                @foreach($products as $key => $value)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td style="color: darkred">{{$value->name}}</td>
                        <td>{{$value->price}}</td>
                        <td>{{$value->price_old}}</td>
                        <td>{{$value->detail_product}}</td>
                        <td><img src="{{asset("storage/".$value->image)}}" style="width: 90px;height: 90px"> </td>
                        <td><a class="btn -btn-primary" style="background-color: yellow" href="{{route('products.edit', $value->id)}}">Edit</a></td>
                        <td><a class="btn -btn-primary"  style="background-color: red; color: white" href="{{route('products.destroy', $value->id)}}"  onclick="return confirm('Bạn muốn xóa sản phẩm này khỏi danh sách?')">Delete</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('products.create')}}">Thêm sản phẩm</a>
        <a class="btn btn-primary" style="background-color: orange" href="{{route('home.main')}}">Kiểm tra trang chủ</a>
        <a class="btn -btn-primary" style="background-color: orange" onclick="window.history.go(-1); return false;">Back</a>

    </div>

@endsection
