@foreach($children as $subcategory)
    <a href="#" class="fh5co-sub-ddown"></a>
    <ul class="fh5co-sub-menu">

        @if(count($subcategory->children))
            <li class= "fh5co-sub-menu">
                <a href="#services">{{$subcategory->title}} <span class="fh5co-sub-ddown" aria-hidden="true"></span></a>
            </li>

            <ul class="fh5co-sub-menu">
                @include('home.categorytree',['children'=> $subcategory->children])
            </ul>
            <hr>
        @else
            <li> <a href="{{route('categoryhotels',['id'=>$subcategory->id , 'slug'=>$subcategory->title])}}"> <span class="fh5co-sub-ddown" aria-hidden="true"></span>{{$subcategory->title}}</a></li>

        @endif

    </ul>
@endforeach
