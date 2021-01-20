
@extends('home.homepage')

@section('title' , 'İletişim' )
@section('description'){{$setting->description}}@endsection
@section('keywords' , $setting->keywords)


@section('content')


            <div class="brand_color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-md-12">
             <div class="row">
                 <div class="col-md-6">
                     {!! $setting->contact !!}
                 </div>
                 <div class="col-md-6">
                     <div class="contact">
                         <div class="container">
                             <div class="row">
                                 @include('home.message')
                                 <div class="col-md-12">
                                     <form class="main_form" action="{{route('sendmessage')}}" method="post">
                                         @csrf
                                         <h4>İletişim Formu</h4>
                                         <div class="row">
                                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                 <input class="form-control" placeholder="Name & Surname" type="text" name="name">
                                             </div>
                                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                 <input class="form-control" placeholder="Email" type="text" name="email">
                                             </div>
                                             <div class=" col-md-12">
                                                 <input class="form-control" placeholder="Subject" type="text" name="subject">
                                             </div>
                                             <div class=" col-md-12">
                                                 <input class="form-control" placeholder="Phone" type="text" name="phone">
                                             </div>

                                             <div class="col-md-12">
                                                 <textarea class="textarea" placeholder="Message" name="message"></textarea>
                                             </div>
                                             <div class=" col-md-12">
                                                 <button class="send">Send Message</button>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
            </div>

        </div>
    </div>

    <!-- end contact -->
@endsection

