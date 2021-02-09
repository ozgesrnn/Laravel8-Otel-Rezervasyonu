@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('home.homepage')

@section('title' , 'Rezervasyon')

@section('content')

    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/slider1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">Ödeme Sayfası</h1>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-contact-section">
        <div class="row">
            <div class="col-md-12">
                <div id="map" class="fh5co-map">

                    <div class="col-md-6">
                        <form class="main_form" action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <section class="contact py-5" id="contact">
                                        <div class="container py-xl-5 py-lg-3">
                                            <div class="register-w3 py-5">
                                                <div class="container py-xl-5 py-lg-3">


                                                    @include('home.message')
                                                    <div class="container">
                                                     <div class="row">
                                                         <h3 class="tittle text-left text-bl font-weight-bold">Rezervasyon Formu</h3>
                                                     <div class="col-md-6">
                                                        <div class=" col-md-6 ">
                                                            <input class="form-control" value="{{Auth::user()->name}}" placeholder="Name & Surname" type="text" name="name">
                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <input class="form-control" value="{{Auth::user()->email}}" placeholder="Email" type="text" name="email">
                                                        </div>
                                                        <div class=" col-md-12">
                                                            <input class="form-control" value="{{Auth::user()->phone}}" placeholder="Phone" type="text" name="subject">
                                                        </div>
                                                        <div class=" col-md-12">
                                                            <input class="form-control" value="{{Auth::user()->address}}" placeholder="Address" type="text" name="phone">
                                                        </div>

                                                                <div class=" col-md-6 ">
                                                                    <label>Checkin</label>
                                                                    <input class="form-control"  type="date" name="checkin">
                                                                </div>
                                                                <div class=" col-md-6 ">
                                                                    <label>Checkout</label>
                                                                    <input class="form-control"  type="date" name="checkout">
                                                                </div>

                                                                <div class="col-md-6 ">
                                                                    <label>Kişi Sayısı</label>
                                                                <td><br><input type="number" style="width: 235px; height:45px;" value="adet" name="adet" id="adet"/></td>
                                                                </div>
                                                         <div class=" col-md-6">
                                                             <label>Total Price</label>
                                                             <input class="form-control" placeholder="total number" type="number" name="total">
                                                         </div>
                                                         <div class=" col-md-6">
                                                             <label>Total Price</label>
                                                             <input class="form-control" value="" placeholder="total" type="text" name="total">
                                                         </div>
                                                            </div>
                                                         <div class="container">
                                                             <div class="row">
                                                                     <h3 class="tittle text-left text-bl font-weight-bold">Kart Bilgileri</h3>
                                                                 <div class="col-md-6">
                                                                     <div class=" col-md-6 ">
                                                                         <input class="form-control" value="{{Auth::user()->name}}" placeholder="Card Name" type="text" name="cardname">
                                                                     </div>
                                                                     <div class="col-md-6 ">
                                                                         <input class="form-control" value="" placeholder="Card Number" type="number" name="cardnumber">
                                                                     </div>
                                                                     <div class=" col-md-12">
                                                                         <input class="form-control" value="" placeholder="Valid Dates mm/yy" type="text" name="dates">
                                                                     </div>
                                                                     <div class=" col-md-12">
                                                                         <input class="form-control" value="" placeholder="Secret Number" type="text" name="key">
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                     <input type="submit" value="Book Now" class="btn btn-primary">
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<script>
    import Label from "@/Jetstream/Label";
    export default {
        components: {Label}
    }
</script>
