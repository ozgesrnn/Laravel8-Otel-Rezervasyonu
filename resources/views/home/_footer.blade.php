@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

</div>
</div>
<footer id="footer" class="fh5co-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="copyright">
                    <p><small>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <br> {{$setting->company}} <br>
                        </small></p>
                    <strong>Address :</strong>  {{$setting->address}}<br>
                    <strong>Phone :</strong>  {{$setting->phone}}<br>
                    <strong>Fax :</strong>  {{$setting->fax}}<br>
                    <strong>Email :</strong>  {{$setting->email}}<br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <h3>ADDRESS </h3>

                        <ul class="link">
                            <li><a href="{{route('aboutus')}}">About Us</a></li>
                            <li><a href="{{asset('assets')}}/#">Hotels</a></li>
                            <li><a href="{{asset('assets')}}/#">Customer Care</a></li>
                            <li><a href="{{asset('assets')}}/#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>MY ACCOUNT</h3>
                        <ul class="link">
                            <li><a href="{{route('myprofile')}}">My Account</a></li>
                            <li><a href="{{route('admin_login')}}">Login</a></li>
                            <li><a href="{{asset('assets')}}/#">Pick-up</a></li>
                            <li><a href="{{asset('assets')}}/#">Swimming Pool</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                         <h3>COMPANY  <br><br>{{$setting->company}} </h3>

                        <p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
                        <form action="#" id="form-subscribe">
                            <div class="form-field">
                                <input type="email" placeholder="Email Address" id="email">
                                <input type="submit" id="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <ul class="social-icons">
                    <li>
                    @if ($setting->facebook !=null) <a href="{{$setting->facebook}}" target="_blank"><i class="icon-facebook-with-circle"></i></a>@endif
                    @if ($setting->instagram !=null) <a href="{{$setting->instagram}}" target="_blank"><i class="icon-instagram-with-circle"></i></a>@endif
                    @if ($setting->twitter !=null) <a href="{{$setting->twitter}}" target="_blank"><i class="icon-twitter-with-circle"></i></a>@endif
                    <a href="{{asset('assets')}}/#" target="_blank"><i class="icon-linkedin-with-circle"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer-logo">
            <a class="logo" href="{{route('anasayfa')}}">
                <img src="{{asset('assets')}}/images/logoo1.png" >
            </a>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- Javascripts -->
<script src="{{asset('assets')}}/js/jquery-2.1.4.min.js"></script>
<!-- Dropdown Menu -->
<script src="{{asset('assets')}}/js/hoverIntent.js"></script>
<script src="{{asset('assets')}}/js/superfish.js"></script>
<!-- Bootstrap -->
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
<!-- Counters -->
<script src="{{asset('assets')}}/js/jquery.countTo.js"></script>
<!-- Stellar Parallax -->
<script src="{{asset('assets')}}/js/jquery.stellar.min.js"></script>
<!-- Owl Slider -->
<!-- // <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script> -->
<!-- Date Picker -->
<script src="{{asset('assets')}}/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="{{asset('assets')}}/js/classie.js"></script>
<script src="{{asset('assets')}}/js/selectFx.js"></script>
<!-- Flexslider -->
<script src="{{asset('assets')}}/js/jquery.flexslider-min.js"></script>

<script src="{{asset('assets')}}/js/custom.js"></script>

</body>
</html>

