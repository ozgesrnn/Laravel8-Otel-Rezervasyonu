
@extends('home.homepage')


@section('title' , 'References -' . $setting->title )
@section('description'){{$setting->description}}@endsection
@section('keywords' , $setting->keywords)


@section('content')

    <!-- end:fh5co-header -->
    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/paris.jpeg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">References</h1>
                        <p> Bizi Tercih Eden Müşterilerimiz <a href="{{route('anasayfa')}}"> - TatilGemisi.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-contact-section">
        <div class="container">
        <div class="row">
            {!! $setting->references !!}


                </div>
        </div>
    </div>
    <!-- end contact -->
@endsection

