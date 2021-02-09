@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('home.homepage')

@section('title' , $setting->title)
@section('description'){{$setting->title}}@endsection
@section('keywords' , $setting->title)


@section('content')

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="breadcrumb-mobamu">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Search</li>
                        </ol>
                    </div>


                    <section class="contact py-5" id="contact">
                        <div class="container py-xl-5 py-lg-3">
                            <div class="search">
                                <form action="{{route('gethotel')}}" method="post" class="input-append">
                                    @csrf
                                    @livewire('search')
                                    <button class="btn btn-dark" type="submit">Search</button>
                                </form>

                                @livewireScripts
                            </div>

                        </div>
                    </section>
                </div>

@endsection
