

<aside id="fh5co-hero"  class="js-fullheight">
    <div class="flexslider js-fullheight">
        @foreach($slider as $rs)
        <ul class="slides">
            <li style="background-image: url({{asset('assets')}}/images/10.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">

                            <div class="desc">
                                <p><span></span></p>
                                <h2>{{$rs->title}}</h2>
                                <p>
                                    <a href="{{route('hotel',['id'=>$rs->id])}}" class="btn btn-primary btn-lg">Look Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
            <li style="background-image: url(images/slider2.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">
                            <div class="desc">
                                <p><span>Deluxe Hotel</span></p>
                                <h2>Make Your Vacation Comfortable</h2>
                                <p>
                                    <a href="{{asset('assets')}}/#" class="btn btn-primary btn-lg">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: img src(images/slider3.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">
                            <div class="desc">
                                <p><span>Luxe Hotel</span></p>
                                <h2>A Best Place To Enjoy Your Life</h2>
                                <p>
                                    <a href="{{asset('assets')}}/#" class="btn btn-primary btn-lg">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</aside>
