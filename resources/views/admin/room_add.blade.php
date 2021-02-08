<html>
<head>
    <title>Image Galeri</title>
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h3 mb-4 text-gray-800">Hotel: {{$datalist->title}}</h1>
    </div>
    <div class="card-body">
        <form role="form" action="{{route('admin_room_store',['hotel_id'=>$datalist->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label><b>Title</b></label>
                    <input type="text" name="title" class="form-control" >

                </div>
                <div class="form-group">
                    <label><b>Description</b></label>
                    <input type="text" name="description" class="form-control" >

                </div>
                <div class="form-group">
                    <label><b>Price</b></label>
                    <input type="text" name="price" class="form-control" >

                </div>
                <div class="form-group">
                    <label><b>Adet</b></label>
                    <input type="text" name="adet" class="form-control" >

                </div>
                <div class="form-group">
                    <label><b>Slug</b></label>
                    <input type="text" name="slug" class="form-control" >
                </div>
                <div class="form-group">
                    <label><b>Image</b></label>
                    <input type="file" name="image" class="form-control" >

                    <div class="form-group">
                        <label><b>Status</b></label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                            <option value="">Seçim Yapınız</option>
                            <option>Aktif</option>
                            <option>Pasif</option>
                        </select>
                    </div>

                <button type="submit" class="btn btn-primary">Room Ekle</button>
            </div>


            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Adet</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $rs )
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->description}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->adet}}</td>
                            <td>{{$rs->slug}}</td>
                            <td>
                                @if ($data->image)
                                    <img src="{{ Storage::url($data->image) }}" height="30" alt="">
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin_room_edit',['id' => $rs->id,'hotel_id' => $data->id])}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-edit text-white" ></i></a>
                                <a href="{{route('admin_room_delete',['id' => $rs->id,'hotel_id' => $data->id])}}" onclick="return confirm('Delete! Are you sure? ')"><i class="fa fa-times" ></i></a></td>

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

