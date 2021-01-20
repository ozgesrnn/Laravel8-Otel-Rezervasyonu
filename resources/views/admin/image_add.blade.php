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
            <h1 class="h3 mb-4 text-gray-800">Hotel: {{$data->title}}</h1>
        </div>
   <div class="card-body">

           <form role="form" action="{{route('admin_image_store',['hotel_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="card-body">
                   <div class="form-group">
                       <label>Başlık</label>
                       <input type="text" id="title" name="title" class="form-control">
                   </div>
                   <div class="form-group">
                       <label>Image</label>
                       <input type="file"  name="image" class="form-control">
                   </div>
               </div>
               <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Image Ekle</button>
               </div>
               <form>
                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       <thead>
                       <tr>
                           <th>Id</th>
                           <th>Başlık</th>
                           <th>Image</th>
                           <th>İşlemler</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach( $images as $rs )
                           <td>{{ $rs -> id }}</td>
                           <td>{{ $rs -> title }}</td>
                           <td>
                               @if ($rs->image)
                                   <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                               @endif
                           </td>
                           <td>
                               <a href="{{route('admin_image_delete',['id' => $rs->id,'hotel_id'=>$data->id])}}" title="Sil" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="fa fa-times" ></i></a>
                           </td>
                           </tr>
                       @endforeach
                       </tbody>
               </table>
               </form>
           </form>
   </div>
    </div>
</body>
</html>

