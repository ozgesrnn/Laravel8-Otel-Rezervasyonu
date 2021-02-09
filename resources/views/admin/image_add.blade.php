<html>
<head>
    <title>Image Galeri</title>

    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/css/ruang-admin.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-4 text-gray-800">Hotel: {{$data->title}}</h1>
        </div>
        <div class="card-body">
            <form role="form" action="{{route('admin_image_store',['hotel_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>İmage</label>
                        <input type="file" name="image" class="form-control" >

                    </div>
                    <button type="submit" class="btn btn-primary">Resim Ekle</button>
                </div>


                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($images as $rs )
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if ($data->image)
                                            <img src="{{ Storage::url($data->image) }}" height="30" alt="">
                                    @endif
                                <td><a href="{{route('admin_image_delete',['id' => $rs->id,'hotel_id' => $data->id])}}" onclick="return confirm('Delete! Are you sure? ')"><i class="fa fa-times" ></i></a></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>


</body>
</html>

