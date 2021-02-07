<html>
<head>
    <title>Image Galeri</title>
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">Hotel: {{$data->title}}</h1>
        <h4>Create Room</h4>

    </div>
    <div class="card-body">

        <form role="form" action="{{route('admin_room_store',['hotel_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label><b>Title</b></label>
                    <input type="text" name="title" value="{{$data-> title}}" class="form-control" id="title">
                </div>

                <div class="form-group">
                    <label><b>Description</b></label>
                    <input type="text" name="description" value="{{$data->description}}" class="form-control"
                           id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label><b>Slug</b></label>
                    <input type="text" name="description" value="{{$data->slug}}" class="form-control"
                           id="exampleInputPassword1">
                </div>

                <div class="form-group">
                    <label><b>Price</b></label>
                    <input type="text" name="price" value="{{$data->price}}" class="form-control"
                           id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label><b>Adet</b></label>
                    <input type="text" name="adet" value="{{$data->adet}}" class="form-control"
                           id="exampleInputPassword1">
                </div>

                <div class="form-group">
                    <label><b>Image</b></label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                    @if ($data->image)
                        <img src="{{Storage::url($data->image)}}" height="60" alt="">
                    @endif
                </div>

                <div class="form-group">
                    <label><b>Status</b></label>
                    <select class="form-control select2" name="status" style="width: 100%;">
                        <option value="">{{$data->status}}</option>
                        <option>Aktif</option>
                        <option>Pasif</option>
                    </select>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-block">Güncelle</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
