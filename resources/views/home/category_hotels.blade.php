@php
   $parentCategories = \App\Http\Controllers\HomeController::categorylist()
  @endphp
@extends('home.homepage')

@section('title', $data->title ."Hotel List" )

@section('content')

    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/slider1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">Hotel List</h1>
                        <h1 class="text-center">List</h1>
                        <li class="active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}}</li>
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
                        <a href="{{route('hotel',['id' => $rs->id])}}" class="main-btn quick-view"></a>
                        <img src="{{Storage::url($rs->image)}}">
                            <div class="price"><small>For as low as</small><span>$100/night</span></div>
                            <a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
                        </div>
                        <div class="desc">
                            <h3><a href="#">{{$rs->title}}</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection


