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
                        <h1 class="text-center">User Profile</h1>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div id="aside" class="col-md-2">
                                        @include('home.usermenu')
                                    </div>

                                    <div id="main" class="col-md-10">
                                        <div class="col-lg-12">
                                            <div class="card mb-4">

                                                <div class="table-responsive p-3">
                                                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                                        <thead class="thead-light">

                                                        <tr>
                                                            <th>Id</th>
                                                            <th>User</th>
                                                            <th>Hotel</th>
                                                            <th>Room</th>
                                                            <th>Name</th>
                                                            <th>Surname</th>
                                                            <th>Phone</th>
                                                            <th>Total</th>
                                                            <th>Checkin</th>
                                                            <th>Checkout</th>
                                                            <th>Days</th>
                                                            <th>Note</th>
                                                            <th>Action</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                        </thead>

                                                        @foreach($datalist as $rs )
                                                            @php
                                                                $total=0;
                                                                $total= $rs ->room->price* $rs->adet;
                                                            @endphp
                                                            <tr>
                                                                <td>{{ $rs -> id }}</td>
                                                                <td>{{ $rs -> user_id }}</td>
                                                                <td>{{ $rs -> hotel_id }}</td>
                                                                <td>{{ $rs -> room -> title }}</td>
                                                                <td>{{ $rs->name }}</td>
                                                                <td>{{ $rs->surname }}</td>
                                                                <td>{{ $rs->phone }}</td>
                                                                <td>{{ $rs->total }}</td>
                                                                <td>{{ $rs->checkin}}</td>
                                                                <td>{{ $rs->checkout}}</td>
                                                                <td>{{ $rs->days}}</td>
                                                                <td>{{ $rs->note}}</td>
                                                                <td>{{ $rs->status }}</td>


                                                                <td><a href="{{route('user_reservation_delete',['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure? ')">
                                                                        <img src="{{asset('assets/admin/img')}}/delete.png" height="26"></a></td>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
