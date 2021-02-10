<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            @foreach($slider as $rs)
            <li>
                <img src="{{Storage::url($rs->image)}}" height="300px">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">
                            <div class="desc">
                                <p><span></span></p>
                                <p><a href="{{route('hotel',['id' => $rs->id, 'slug' => $rs->slug]  )}}"  class="btn btn-primary btn-lg">Oteli İncele</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</aside>



