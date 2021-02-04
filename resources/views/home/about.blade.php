
@extends('home.homepage')


@section('title' , 'About Us -'. $setting->title )
@section('description'){{$setting->description}}@endsection
@section('keywords' , $setting->keywords)


@section('content')
    <!-- end:fh5co-header -->
    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/about.jpeg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">About Us</h1>
                        <p>  <a href="{{route('anasayfa')}}"> - TatilGemisi.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-counter-section" class="fh5co-counters">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">User Access</span>
                </div>
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Hotels</span>
                </div>
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Transactions</span>
                </div>
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Rating &amp; Review</span>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-contact-section">
        <div class="container">
            <div class="row">
                {!! $setting->aboutus !!}

            </div>
        </div>
    </div>
@endsection

