@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

<li>
    <!-- First Tier Drop Down -->
<a href="#" class="fh5co-sub-ddown">Categories</a>
    <ul class="fh5co-sub-menu">

        @foreach($parentCategories as $rs)
            <li>
                <a href="{{route('categoryhotels',['id'=>$rs->id , 'slug'=>$rs->title])}}" >{{$rs->title}} <span aria-hidden="true"></span></a>

            </li>
        @endforeach
    </ul>

</li>
