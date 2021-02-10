
@extends('home.homepage')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title', 'My rezerves '.$setting->title)



@section('content')

    <!-- end:fh5co-header -->
    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/contact.jpeg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">Home</h1>
                        @include('home.usermenu')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
            <div class="container">
                <div class="row">
                    <div id="aside" class="col-md-2">

                    </div>

                    <div id="main" class="col-md-10">
                        <div class="col-lg-12">
                            <div class="card mb-4">

                                <div class="table-responsive p-3">
                                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Hotel</th>
                                            <th>Room</th>
                                            <th>Name</th>
                                            <th>Checkin</th>
                                            <th>Checkout</th>
                                            <th>Total</th>
                                            <th>Adet</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datalist as $rs )
                                            @php

                                            @endphp

                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ $rs->hotel_id }}</td>
                                                <td>

                                                </td>
                                                <td>{{ $rs->user->name }}</td>

                                                <td>{{ $rs->checkin}}</td>

                                                <td>{{ $rs->checkout}}</td>
                                                <td>{{ $rs->price }}₺</td>
                                                <td>{{ $rs->adet}}</td>
                                                <td>{{ $rs->note}}</td>
                                                <td>{{ $rs->status }}</td>


                                               <td> <a href="{{route('admin_reservation_delete',['id' => $rs->id])}}" title="Sil" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><img src="{{asset('assets/admin/img')}}/delete.png" height="25px"></a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        @endforeach
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

@endsection
