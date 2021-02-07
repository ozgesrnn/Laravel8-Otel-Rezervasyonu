<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">

<link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

<link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

<link rel="icon" href="{{asset('assets')}}/images/fevicon.png" type="image/gif"/>

<link rel="stylesheet" href="{{asset('assets')}}/css/jquery.mCustomScrollbar.min.css">

<link rel="stylesheet"
      href="{{asset('assets')}}/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet"
      href="{{asset('assets')}}/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">


<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Review Edit</h1>
    @include('home.message')
</div>
   <div class="card-body">

       <form role="form" action="{{ route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                           <tr>
                               <th>Id</th>  <td>{{ $data->id }}</td>
                           </tr>

                           </tr>
                           <th>User</th>   <td>{{ $data->user->title }}</td>

                           </tr>

                           </tr>
                           <th>Hotel</th>   <td>{{ $data->hotel->title }}</td>

                           </tr>

                           </tr>
                           <th>Room</th>   <td>{{ $data->room->title }}</td>

                           </tr>
                           </tr>
                           <th>Name</th>   <td>{{ $data->name}}</td>

                           </tr>

                           </tr>
                           <th>Total</th>   <td>{{ $data->total }}</td>

                           </tr>

                           </tr>
                           <th>checkin</th>   <td>{{ $data->checkin }}</td>

                           </tr>

                           </tr>
                           <th>checkout</th>   <td>{{ $data->checkout }}</td>

                           </tr>

                           </tr>
                           <th>days</th>   <td>{{ $data->days }}</td>

                           </tr>

                           </tr>
                           <th>note</th>   <td>{{ $data->note }}</td>

                           </tr>

                           </tr>
                           <th>Action</th>   <td>{{ $data->status }}</td>
                           <tr>
                               <td></td>
                               <td>
                               <div class="card-footer">
                                   <button type="submit" class="btn btn-success btn-block">Güncelle</button>
                               </div></td>
                           </tr>
                       </table>
           </form>


</div>





