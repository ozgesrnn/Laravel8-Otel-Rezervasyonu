@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('home.homepage')
@section('title', $setting->title)

@section('description'){{ $setting->description}}@endsection

@section('keywords',$setting->keywords)

@section('content')
    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/slider1.jpeg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center" href="{{route('anasayfa')}}">Home</h1>
                        <li class="breadcrumb-item active" aria-current="page">Rezervasyon</li>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="contact py-5" id="contact">
        <div class="container py-xl-5 py-lg-3">
            <div class="register-w3 py-5">
                <div class="container py-xl-5 py-lg-3">
                    <h3 class="tittle text-center text-bl font-weight-bold">Rezervasyon Formu</h3>

                    @include('home.message')

                    <div class="comment-top mt-5">

                        <div class="comment-bottom mobamuinfo_mail_grid_right">
                            <form action="{{route('sendrezerve',['id'=>$room->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" name="name"  placeholder="Type Here.." required="">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" name="surname"  placeholder="Type Here.." required="">
                                    </div>
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" name="phone" placeholder="Phone Number" required="">
                                </div>


                                <div class="row">
                                    <div class="col-lg-6 form-group date-plu">
                                        <label>Checkin</label>
                                        <input type="date" name="checkin" required="">
                                    </div>
                                    <div class="col-lg-6 form-group date-plu">
                                        <label>Checkout</label>
                                        <input type="date" name="checkout" required="">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-5  form-group">
                                        <label>Note</label>
                                        <textarea class="form-control" name="note" placeholder="Write Here.." required=""></textarea>
                                    </div>


                                </div>


                                <button type="submit" class="btn submit mt-3">Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //booking form -->

        </div>
    </section>
    </div>


@endsection
