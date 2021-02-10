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

    <h1 class="h3 mb-4 text-gray-800">Rezervasyon Edit</h1>

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
                    <tr>
                        <th>Name</th><td>
                        <a href="{{route('admin_user_show',['id' => $rs->user->id ])}}"  onclick="return confirm('Silmek istediğinize emin misiniz?')"><img src="{{asset('assets/admin/img')}}/delete.png" height="25px">
                        {{ $data->name }}
                    </a>
                    </td>
                    </tr>
                    <tr>
                    <th> Hotel</th>   <td>{{ $data->hotel->title }}</td>
                    </tr>
                    <tr>
                        <th>Subject</th>   <td>{{ $data->subject }}</td>
                    </tr>

                    <tr>
                        <th>Review</th>  <td>{{ $data->review }}</td>
                    </tr>
                    <tr>
                        <th>Rate</th>   <td>{{ $data->rate}}</td>
                    </tr>


                    <tr>
                        <td></td>
                        <td>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-block">Güncelle</button>
                            </div></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>
