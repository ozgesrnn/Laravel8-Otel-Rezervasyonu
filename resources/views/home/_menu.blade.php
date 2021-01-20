@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<nav id="fh5co-menu-wrap" role="navigation">
    <ul class="sf-menu" id="fh5co-primary-menu">
        <li><a class="active" htef="{{asset('assets')}}/index.html">Home</a></li>
        <li>
            <a htef="{{asset('assets')}}/hotel.html" class="fh5co-sub-ddown">Hotel</a>
            <ul class="fh5co-sub-menu">
                <li><a htef="{{asset('assets')}}/#">Luxe Hotel</a></li>
                <li><a htef="{{asset('assets')}}/#">Deluxe Hotel</a></li>
                <li>
                    <a htef="{{asset('assets')}}/#" class="fh5co-sub-ddown">King Hotel</a>
                    <ul class="fh5co-sub-menu">
                        <li><a htef="{{asset('assets')}}/http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
                        <li><a htef="{{asset('assets')}}/http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
                        <li><a htef="{{asset('assets')}}/http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
                        <li><a htef="{{asset('assets')}}/http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
                        <li><a htef="{{asset('assets')}}/http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
                        <li><a htef="{{asset('assets')}}/http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
                    </ul>
                </li>
                <li><a htef="{{asset('assets')}}/#">Five Star Hotel</a></li>
            </ul>
        </li>
        <li><a htef="{{asset('assets')}}/services.html">Services</a></li>
        <li><a htef="{{asset('assets')}}/blog.html">Blog</a></li>
        <li><a htef="{{asset('assets')}}/contact.html">Contact</a></li>
    </ul>
</nav>
