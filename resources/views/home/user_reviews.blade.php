
@extends('home.homepage')

@section('title' ,'User Profile')

@section('content')
    <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/slider1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">User Profile</h1>

                        </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div id="aside" class="col-md-2">
                            @include('home.usermenu')
                        </div>

                        <div id="main" class="col-md-10">
                            <div class="col-lg-12">
                                <div class="card mb-4">

                                    <div class="table-responsive p-3">
                                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Id</th>
                                                <th>Hotel</th>
                                                <th>Subject</th>
                                                <th>Review</th>
                                                <th>Rate</th>
                                                <th>Action</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @include('home.message')
                                            @foreach($datalist as $rs )
                                                <tr>
                                                    <td>{{ $rs->id }}</td>
                                                    <td> <a href="{{route('hotel', ['id' => $rs->hotel->id, 'slug' => $rs->hotel->slug])}}" target="_blank">
                                                            {{$rs->hotel->title}}</a></td>
                                                    <td>{{ $rs->subject }}</td>
                                                    <td>{{ $rs->review }}</td>
                                                    <td>{{ $rs->rate}}</td>
                                                    <td>{{ $rs->status }}</td>


                                                    <td><a href="{{route('user_review_delete',['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure? ')"><img src="{{asset('assets/admin/img')}}/delete.png" height="26"></a></td>

                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
@endsection

