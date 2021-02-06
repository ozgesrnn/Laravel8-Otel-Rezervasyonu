@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('home.homepage')

@section('title' , $setting->title . 'Anasayfa' )
@section('description',  $setting->description)
@section('keywords', $setting->keywords)



@section('content')

    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('assets')}}/images/10.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-12 col-md-offset-0 text-center slider-text">
                            <div class="slider-text-inner js-fullheight">
                                <div class="desc">
                                    <p><span>Bora Hotel</span></p>
                                    <h2>Reserve Room for Family Vacation</h2>
                                    <p>
                                        <a href="#" class="btn btn-primary btn-lg">Book Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('assets')}}/images/11.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-12 col-md-offset-0 text-center slider-text">
                            <div class="slider-text-inner js-fullheight">
                                <div class="desc">
                                    <p><span>Deluxe Hotel</span></p>
                                    <h2>Make Your Vacation Comfortable</h2>
                                    <p>
                                        <a href="#" class="btn btn-primary btn-lg">Look Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('assets')}}/images/12.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-12 col-md-offset-0 text-center slider-text">
                            <div class="slider-text-inner js-fullheight">
                                <div class="desc">
                                    <p><span>Luxe Hotel</span></p>
                                    <h2>A Best Place To Enjoy Your Life</h2>
                                    <p>
                                        <a href="" class="btn btn-primary btn-lg"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </aside>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div id="availability">

                    <div class="a-col">
                        <section>
                            <div class="a-col-search">
                                <div class="input-field">
                                    <label>Search</label>
                                    <form action="" method="post">
                                        @csrf
                                        @livewire('search')
                                    </form>
                                    @section('footerjs')
                                        @livewireScripts
                                    @endsection
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="a-col alternate">
                        <div class="input-field">
                            <label for="date-start">Check In</label>
                            <input type="text" class="form-control" id="date-start"/>
                        </div>
                    </div>
                    <div class="a-col alternate">
                        <div class="input-field">
                            <label for="date-end">Check Out</label>
                            <input type="text" class="form-control" id="date-end"/>
                        </div>
                    </div>
                    <div class="a-col action">
                        <a href="{{asset('assets')}}/#">
                            <span>Ara</span>

                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-counter-section" class="fh5co-counters">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">User Access</span>
                </div>
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Hotels</span>
                </div>
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Transactions</span>
                </div>
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Rating &amp; Review</span>
                </div>
            </div>
        </div>
    </div>

    <div id="featured-hotel" class="fh5co-bg-color">
        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Featured Hotels</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($featured as $rs)
                    <div class="feature-full-1col">
                        <div href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}" class="hotel-grid">
                            <img src="{{Storage::url($rs->image)}}" height="300px">
                            <div class="descrip text-center">
                                <p><small>{{$rs->city}}</small><span>{{$rs->price}} TL</span></p>
                                <a class="book-now text-center"
                                   href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}"><i
                                        class="ti-calendar"></i> İncele</a>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->title}}</a>
                            </h3>
                            <p><a href="{{asset('assets')}}/#" class="btn btn-primary btn-luxe-primary"><i
                                        class="ti-angle-right"></i></a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="hotel-facilities">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Hotel Fırsatları</h2>
                    </div>
                </div>
            </div>

            <div class="tab-content-container">
                <div class="tab-content active show" data-tab-content="tab1">
                    <div class="container">
                        <div class="row">
                            @foreach($firsat as $rs)
                                <div class="feature-full-1col">
                                    <div href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}"
                                         class="hotel-grid">
                                        <img src="{{Storage::url($rs->image)}}" height="300px">
                                        <div class="descrip text-center">
                                            <p><small>{{$rs->city}}</small><span>{{$rs->price}} TL</span></p>
                                            <a class="book-now text-center"
                                               href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}"><i
                                                    class="ti-calendar"></i> İncele</a>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <h3>
                                            <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->title}}</a>
                                        </h3>
                                        <p><a href="{{asset('assets')}}/#" class="btn btn-primary btn-luxe-primary"><i
                                                    class="ti-angle-right"></i></a></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div id="testimonial">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center">
                                    <h2>Happy Customer Says...</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimony">
                                    <blockquote>
                                        &ldquo;If you’re looking for a top quality hotel look no further. We were
                                        upgraded free of charge to the Premium Suite, thanks so much&rdquo;
                                    </blockquote>
                                    <p class="author"><cite>John Doe</cite></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimony">
                                    <blockquote>
                                        &ldquo;Me and my wife had a delightful weekend get away here, the staff were so
                                        friendly and attentive. Highly Recommended&rdquo;
                                    </blockquote>
                                    <p class="author"><cite>Rob Smith</cite></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimony">
                                    <blockquote>
                                        &ldquo;If you’re looking for a top quality hotel look no further. We were
                                        upgraded free of charge to the Premium Suite, thanks so much&rdquo;
                                    </blockquote>
                                    <p class="author"><cite>Jane Doe</cite></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="fh5co-blog-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center">
                                    <h2>Our Blog</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="blog-grid" style="background-image: url(images/image-1.jpg);">
                                    <div class="date text-center">
                                        <span>09</span>
                                        <small>Aug</small>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="{{asset('assets')}}/#">Most Expensive Hotel</a></h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-grid" style="background-image: url(images/image-2.jpg);">
                                    <div class="date text-center">
                                        <span>09</span>
                                        <small>Aug</small>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="{{asset('assets')}}/#">1st Anniversary of Luxe Hotel</a></h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-grid" style="background-image: url(images/image-3.jpg);">
                                    <div class="date text-center">
                                        <span>09</span>
                                        <small>Aug</small>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="{{asset('assets')}}/#">Discover New Adventure</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection






