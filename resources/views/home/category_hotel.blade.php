@php
   $parentCategories = \App\Http\Controllers\HomeController::categorylist()
  @endphp
@extends('home.homepage')

@section('title' , 'Hotel List' )

@section('content')



<!-- our product -->

<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">




<div class="product-bg">
    <div class="product-bg-white">
            <div class="row">
                @foreach($datalist as $rs)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p1.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p2.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p3.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p4.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p5.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p2.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p6.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p7.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p6.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p1.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p2.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box">
                        <i><img src="{{asset('assets')}}/icon/p4.png"/></i>
                        <h3>Norton Internet Security</h3>
                        <span>$25.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


