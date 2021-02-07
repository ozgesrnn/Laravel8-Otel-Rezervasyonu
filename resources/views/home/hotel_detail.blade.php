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
                        <a href="{{asset('assets')}}/#">
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

          <section id="maincontent">
              <div class="container">
                  <div class="row">
                      <div class="span8">
                          <div class="span8">
                              <article class="blog-post">
                                  <div class="post-heading">
                                      <h3><a href="">{{$data->title}}</a> </h3>
                                  </div>
                                  <div class="row">
                                      <div class="span8">

                                          <table class="table">
                                              <tbody>
                                                <th>Bilgiler</th>
                                                <th>Fiyat</th>
                                                <th>Oda Tipi</th>
                                                <th>Rezervasyon</th>
                                                <th> </th>
                                              <tr>
                                                  <td><b>City :</b>
                                                      {!! $data->city !!}<br>
                                                      <b>Country :</b> {!! $data->country !!}<br>
                                                      <b>Address :</b> {!! $data->address !!}<br>
                                                      <b>Phone :</b> {!! $data->phone !!}
                                                  </td>
                                                  <td>{!! $data->price !!} TL</td>
                                                  <td><select id="oda">
                                                          <option value="tek">Tek Kişilik</option>
                                                          <option value="çift">Çift Kişilik</option></select>
                                                  </td>
                                                  <td><button class="button button2">Rezervasyon Yap</button></td>
                                                 <td> </td>

                                              </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                      <div class="span6">
                                          <h4 class="rheading">Detaylar<span></span></h4>
                                          <div class="tabbable tabs-top">
                                              <ul class="nav nav-tabs">
                                                  <li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Detail</a></li>
                                                  <li><a href="#two" data-toggle="tab">Yorumlar</a></li>
                                                  <li><a href="#three" data-toggle="tab">Tab three</a></li>
                                              </ul>
                                              <div class="tab-content">
                                                  <div class="tab-pane active" id="one">
                                                      <p>
                                                          <strong>{!! $data->detail !!}</strong></p>
                                                      <p>
                                                          No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.
                                                      </p>
                                                  </div>

                                                  <div class="tab-pane" id="two">
                                                      @foreach($reviews as $rs)
                                                          <h5 class="media-heading"><a href="#">{{$rs->user->name}}</a></h5>
                                                          <span>{{$rs->created_at}}</span>
                                                          <strong>{{$rs->subject}}</strong>
                                                          <p>{{$rs->review}}</p>
                                                      @endforeach
                                                  </div>

                                                  <div class="tab-pane" id="three">
                                                      <div class="col-md-12">
                                                          <h4 class="text-uppercase"></h4>
                                                          @livewire('review', ['id' => $data->id])
                                                      </div>

                                                  </div>
                                              </div>
                                          </div>
                                  </div>
                              </article>
                          </div>
                      </div>
                  </div>
              </div>
          </section>





    </div>
    </section>





@endsection


