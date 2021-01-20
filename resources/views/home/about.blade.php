
@extends('home.homepage')


@section('title' , 'About Us' )
@section('description'){{$setting->description}}@endsection
@section('keywords' , $setting->keywords)


@section('content')



    <div class="container">
        <div class="row">
            <div id="aside" class="col-xl-10 col-lg-12 pcol-md-6 col-sm-10">

            </div>
            <div class="col-md-12">
             <div class="row">
                 {!! $setting->aboutus!!}
             </div>
            </div>

        </div>
    </div>

    <!-- end contact -->
@endsection

