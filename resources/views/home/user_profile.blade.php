
@extends('home.homepage')

@section('title' , 'User Profile')

@section('content')



        <div class="container">
            <div class="row">
                <div id="aside" class="col-xl-10 col-lg-12 pcol-md-6 col-sm-10">

                </div>
                <div class="col-md-12">

                    @include('profile.show')
                </div>

            </div>
        </div>

    <!-- end contact -->
@endsection

