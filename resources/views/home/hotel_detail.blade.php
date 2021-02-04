
@extends('home.homepage')

@section('title' , 'İletişim' )
@section('description'){{$data->description}}@endsection
@section('keywords' , $data->keywords)

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@section('content')

    <!-- end:fh5co-header -->
    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/contact.jpeg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">Hotel Detail</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="row">
    <div id="availability">
        <form action="#">

            <div class="a-col">
                <section>
                    <select class="cs-select cs-skin-border">
                        <option value="" disabled selected>Select Hotel</option>
                        <option value="email">Luxe Hotel</option>
                        <option value="twitter">Deluxe Hotel</option>
                        <option value="linkedin">Five Star Hotel</option>
                    </select>
                </section>
            </div>
            <div class="a-col alternate">
                <div class="input-field">
                    <label for="date-start">Check In</label>
                    <input type="text" class="form-control" id="date-start" />
                </div>
            </div>
            <div class="a-col alternate">
                <div class="input-field">
                    <label for="date-end">Check Out</label>
                    <input type="text" class="form-control" id="date-end" />
                </div>
            </div>
            <div class="a-col action">
                <a href="{{asset('assets')}}/#">
                    <span>Check</span>
                    Availability
                </a>
            </div>
        </form>
    </div>
            </div>
        </div>

    <div id="fh5co-contact-section">
        <div class="row">
            @include('home.message')
            <div class="col-md-12">
                <div id="map" class="fh5co-map">
                    <div class="container">
                        <header class="text-center">
                            <h1>Mesonry Image gallery</h1>
                        </header>
                        <div class="row">
                            <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                                <div class="row h-50">
                                    <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
                                        <div class="box">
                                            <img src="{{Storage::url($data->image)}}" class="img-ht img-fluid rounded">
                                        </div>
                                    </div>
                                </div>
                                @foreach($datalist as $rs)
                                <div class="row h-50">
                                    <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                                        <div class="box">
                                            <img src="{{Storage::url($rs->image)}}" class="img-ht img-fluid rounded">
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                                        <div class="box">
                                            <img src="{{Storage::url($data->image)}}" class="img-ht img-fluid rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-25">
                                    @foreach($datalist as $rs)
                                    <div class="box">
                                        <img src="{{Storage::url($rs->image)}}" class="img-ht img-fluid rounded">
                                    </div>
                                    @endforeach
                                </div>

                                <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-75">
                                    <div class="box">
                                        <img src="http://fakeimg.pl/748x177/" class="img-ht img-fluid rounded">
                                    </div>
                                </div>
                                <div id="fh5co-hotel-section">
                                    <div class="container">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <div class="hotel-content">
                                                        <a href="" class="main-btn quick-view"></a>
                                                        <img src="/#">
                                                        <div class="price"><small>For as low as</small><span>{{$data->price}}</span></div>
                                                        <a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
                                                    </div>
                                                    <div class="desc">
                                                        <h3><a href="#">{{$data->title}}</a></h3>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                    <div>
                                                        @php
                                                        $avgrev = \App\Http\Controllers\HomeController::avgreview($data->id);
                                                        $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                                                        @endphp
                                                        <div class="hotel-rating">
                                                            <i class="fa fa-star @if ($avgrev<1) -o empty @endif"></i>
                                                            <i class="fa fa-star @if ($avgrev<2) -o empty @endif"></i>
                                                            <i class="fa fa-star @if ($avgrev<3) -o empty @endif"></i>
                                                            <i class="fa fa-star @if ($avgrev<4) -o empty @endif"></i>
                                                            <i class="fa fa-star @if ($avgrev<5) -o empty @endif"></i>

                                                        </div>
                                                        <a href="#tab2">{{ $countreview }} Review(s) {{ $avgrev }} / Add Review</a>
                                                    </div>
                                                </div>
                                        </div>
                                        @endforeach
                                    </div>


                                </div>
                            </div>
                            </div>

                        </div>
                        <br/>
                    </div>
                <div class="col-md-6">
                <h4 class="text-uppercase">Write Your Review</h4>
                    <p>Ypur email address will not be published.</p>

                    @livewire('review', ['id' => $data=>id])

                </div>

            </div>
        </div>
    </div>
    </div>







    <!-- end contact -->
@endsection

