
        @auth
        <div class="col-md-12">
            <ul class="link">
                <li><a href="{{route('myprofile')}}" class="active">My Profile</a></li>
                <li><a href="">Rezervasyonlar</a></li>
                <li><a href="{{asset('myreviews')}}">Review</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
                @php
                    $userRoles = Auth::user()->roles->pluck('name');
                @endphp
                @if($userRoles->contains('admin'))
                    <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a> </li>
                @endif
            </ul>
        </div>
        @endauth

