
@extends('home.homepage')

@section('title' , 'İletişim' )
@section('description'){{$setting->description}}@endsection
@section('keywords' , $setting->keywords)


@section('content')

    <!-- end:fh5co-header -->
    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/contact.jpeg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">Contact Us</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-contact-section">
        <div class="row">
            @include('home.message')
            <div class="col-md-12">
                <div id="map" class="fh5co-map">

                <div class="col-md-6">
                    <form class="main_form" action="{{route('sendmessage')}}" method="post">
                        @csrf
                        <h4><b>İletişim Formu</b></h4>
                        <div class="row">
                            <div class=" col-md-6 ">
                                <input class="form-control" placeholder="Name & Surname" type="text" name="name">
                            </div>
                            <div class="col-md-6 ">
                                <input class="form-control" placeholder="Email" type="text" name="email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Subject" type="text" name="subject">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="text" name="phone">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                    <div class="col-md-6">
                        {!! $setting->contact !!}
                    </div>

            </div>
        </div>
    </div>
    </div>







    <!-- end contact -->
@endsection

