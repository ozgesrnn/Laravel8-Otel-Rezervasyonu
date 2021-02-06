@php
   $parentCategories = \App\Http\Controllers\HomeController::categorylist()
  @endphp
@extends('home.homepage')

@section('title', $data->title . " Hotel List" )
@section('description' ,  $data->description )
@section('keywords' ,$data->title)
@section('content')

    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/slider1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h4><a href="{{route('anasayfa')}}" class="text-center">Home</a></h4>
                        <h4><a class="active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data , $data->title )}} - Hotel List</a></h4>
                    </div>
            </div>
        </div>
    </div>
        <div id="fh5co-hotel-section">
            <div class="container">
                <div class="row">
                    @foreach($datalist as $rs)
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}" class="hotel-grid">
                                <img src="{{Storage::url($rs->image)}}" height="300px">
                                <div class="price"><small>{{$rs->city}}</small><span>{{$rs->price}} TL</span></div>
                                <a class="book-now text-center" href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}"><i class="ti-calendar"></i> İncele</a>
                            </div>
                            <div class="desc">
                                <h3><a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->title}}</a></h3>

                                <ul class="style-lists">
                                <li>{{$rs->city}}</li>
                                <li>{{$rs->country}}</li>
                                <li>{{$rs->address}} </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>



@endsection


