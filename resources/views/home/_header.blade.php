@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="{{asset('assets')}}/#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="{{route('anasayfa')}}">TatilGemisi.com</a></h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li><a class="active" href="{{route('anasayfa')}}">Home</a></li>
                                <li>
                                    <a href="" class="fh5co-sub-ddown">Category</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="/#">Tatil Köyleri</a></li>
                                        <li>
                                            <a href="/#" class="fh5co-sub-ddown">Oteller</a>
                                            <ul class="fh5co-sub-menu">
                                                <li>
                                                    <a href=""
                                                       target="_blank">Yurtiçi Oteller</a></li>
                                                <li>
                                                    <a href=""
                                                       target="_blank">Yurtdışı Oteller</a></li>
                                                <li>
                                            </ul>
                                        </li>
                                        <li><a href="{{asset('assets')}}/#">Daireler</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="{{route('references')}}">References</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li>

                                      @auth
                                                <a class="active">{{ Auth::user()->name }}</a>
                                        @endauth
                                        @guest
                                              <a href="{{route('myprofile')}}"class="fh5co-sub-ddown">My Account</a>
                                              <ul class="fh5co-sub-menu">
                                                  <li><a href="/login">Login</a></li>
                                                  <li><a href="/register">Join</a></li>
                                                  <li>
                                        @endguest
                                        <ul class="fh5co-sub-menu">
                                            <li><a href="{{route('myprofile')}}">Profile</a></li>
                                            <li><a href="{{route('logout')}}">Logout</a></li>


                                        </ul>
                        </nav>
                    </div>
                </div>
            </header>

        </div>

        <!-- end:fh5co-header -->
        <script>
            import Button from "@/Jetstream/Button";
            export default {
                components: {Button}
            }
        </script>
