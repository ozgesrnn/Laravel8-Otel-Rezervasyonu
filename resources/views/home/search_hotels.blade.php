@php
   $parentCategories = \App\Http\Controllers\HomeController::categorylist()
  @endphp
@extends('home.homepage')

@section('title', $search. 'Hotel List')
    @include('home._header')

@section('content')

    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/slider1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">Hotel List</h1>
                        <li class="text-center active"><a href=>{{$search}} List</a></li>

                    </div>
            </div>
        </div>
    </div>
        <div class="breadcrumb-mobamu">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Arama</li>
            </ol>
        </div>

        <!-- price -->
        <div class="rooms-w3ls bg-li py-5" id="price">
            <div class="container-fluid py-xl-5 py-lg-3">
                <h3 class="tittle text-center text-bl font-weight-bold"></h3>
                <div class="row">
                    @foreach($datalist as $rs)
                        <div class="col-lg-4 price-mobamus">
                            <div class="price-top">
                                <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">
                                    <img src="{{ Storage::url($rs->image) }}" alt="" class="img-fluid" />
                                </a>
                            </div>
                            <div class="price-w3ls-bottom p-4">
                                <h4 class="my-2"><a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->title}}</a></h4>
                                <div class="lm-item-price">
                                    <h6>
                                        <span class="price-midd-head">{{$rs->city}}</span>

                                    </h6>
                                </div>
                                <ul class="style-lists">
                                    <li>{{$rs->address}} </li>
                                    <li>{{$rs->country}}</li>

                                </ul>
                                <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


@endsection


