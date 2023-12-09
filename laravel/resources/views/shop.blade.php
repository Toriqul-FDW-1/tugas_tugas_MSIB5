@extends('front.app')
@section('front')
    @if (Auth::check())
        <div class="hero">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="intro-excerpt">
                            <h1>Shop</h1>
                        </div>
                    </div>
                    <div class="col-lg-7">

                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->

        <div class="untree_co-section product-section before-footer-section">
            <div class="container">
                <div class="row">
                    @foreach ($produk as $product)
                        <!-- Start Column 1 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="{{ route('add.to.cart', $product->id) }}">
                                @empty($product->foto)
                                    <img src="{{ url('admin/img/nophoto.jpg') }}" class="img-fluid product-thumbnail">
                                @else
                                    <img src="{{ url('admin/img') }}/{{ $product->foto }}" class="img-fluid product-thumbnail">
                                @endempty

                                <h3 class="product-title">{{ $product->nama }}</h3>
                                <strong class="product-price">Rp.
                                    {{ number_format($product->harga_jual, 0, ',', '.') }}</strong>

                                <span class="icon-cross">
                                    <img src="{{ asset('front/images/cross.svg') }}" class="img-fluid">
                                </span>
                            </a>
                        </div>
                    @endforeach
                    <!-- End Column 1 -->

                </div>
            </div>
        </div>
    @else
        <div class="untree_co-section product-section before-footer-section">
            <div class="container">
                <div class="row">
                    <a href="{{ route('login') }}" class="btn btn-primary">Silahkan Login terlebih dahulu</a>
                </div>
            </div>
        </div>
    @endif
@endsection
