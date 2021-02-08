@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('home.homepage')
@section('title' , $data->title )
@section('description'){{$data->description}}@endsection
@section('keywords' , $data->keywords)

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @livewireStyles
    <style>
        .checked {
            color: orange;
        }
    </style>
    <style>* {
            margin: 0;
            padding: 0;
        }

        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked) > input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked) > label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked) > label:before {
            content: '★ ';
        }

        .rate > input:checked ~ label {
            color: #ffc700;
        }

        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }

        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
    </style>
    <style>
        .mySlides {
            display: none;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial;
        }

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button2 {background-color: #008CBA;} /* Blue */
    </style>
</head>

@section('content')

    <!-- end:fh5co-header -->
    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/paris.jpeg);"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div
                    class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h4><a href="{{route('anasayfa')}}" class="text-center">Home</a></h4>
                        <h4>
                            <a class="active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data , $data->title )}}
                                - Hotel List</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <a href="{{route('user_reservation_store')}}">
                            <span>Ara</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact py-5" id="contact">
        <div class="container py-xl-5 py-lg-3">
            <h2 class="w3-center">{{$data->title}}</h2>


            <div class="w3-content w3-display-container">
                <img class="mySlides" src="{{ Storage::url($data->image) }}" style="width:100%">
                @foreach($datalist as $rs)
                    <img class="mySlides" src="{{ Storage::url($rs->image) }}" style="width:100%">
                @endforeach

                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            </div>

            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = x.length
                    }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex - 1].style.display = "block";
                }
            </script>
            <br><br>
            <!-- Room Content -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 mt50">
                            <h2 class="lined-heading"><span>Details</span></h2>
                            <h3 class="mt50">Bilgiler</h3>
                            <table class="table table-striped mt30">
                                <tbody>
                                <tr>
                                    <td><i class="fa fa-check-circle"></i> City: {!! $data->city !!}</td>
                                    <td><i class="fa fa-check-circle"></i> Country: {!! $data->country !!}</td>
                                    <td><i class="fa fa-check-circle"></i> Address: {!! $data->address !!}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-check-circle"></i> Phone: {!! $data->phone !!}</td>
                                    <td><i class="fa fa-check-circle"></i> Email: {!! $data->email !!}</td>
                                    <td><i class="fa fa-check-circle"></i> Price: {!! $data->price !!} TL/Night</td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="mt50"> </div>
                        <div class="col-sm-5 mt50">
                            <h2 class="lined-heading"><span></span></h2>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#overview" data-toggle="tab">Detaylar</a></li>
                                <li><a href="#facilities" data-toggle="tab">Odalar</a></li>
                                <li><a href="#extra" data-toggle="tab">Yorum</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="overview">
                                    <p>{!! $data->detail !!} </p>
                                </div>
                                <div class="tab-pane fade" id="facilities">  @if ($data->image)
                                        <img src="{{ Storage::url($data->image) }}" height="200px" alt="">
                                    @endif</div>
                                <div class="tab-pane fade" id="extra"><div class="col-md-12">
                                            <h4 class="text-uppercase"></h4>
                                            @livewire('review', ['id' => $data->id])
                                        </div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        </div>

    </section>







@endsection


