@extends('welcome')

@section('content')
    @if (Session::has('not-login'))
        <div class="not-login">
            <p class="text-danger">{{ Session::get('not-login') }}</p>
        </div>
    @endif

    <h3 class="h3"><img src="{{asset('storage/ps4gif.gif')}}" width="500px" height="100px"></h3>
{{--    <img class="pic-1" src="{{ asset('storage/' . $product->image) }}">--}}
    <div class="row">
        @if (Session::has('success'))
            <div class="col-12 alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('success') }}</strong>
            </div>

        @endif

        @if (Session::has('delete_error'))
            <div class="col-12 alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('delete_error') }}</strong>
            </div>

        @endif

        @forelse($products as $product)
            <div class="col-md-3 col-sm-8">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('storage/' . $product->image) }}">
                        </a>
                        <ul class="social">
                            <li><a href="{{ route('home.show', $product->id)}}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{ route('cart.addToCart', $product->id) }}" data-tip="Add to Cart"><i
                                        class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">20%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{ $product->name }}</a></h3>
                        <div class="price">$16.00
                            <span>$20.00</span>
                        </div>


                    </div>
                </div>
            </div>
        @empty
            <p>{{ "Không có sản phẩm nào" }}</p>
        @endforelse
    </div>
    <br>



@endsection
