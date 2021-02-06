@extends('layouts.admin')

@section('title', 'Hotel List')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{$datalist->count()}}</strong> Otel Bulundu.</h6>
            <a href="{{route('admin_hotel_create')}}" type="submit" class="btn btn-primary">Otel Ekle</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Kategori</th>
                        <th>Başlık</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Price</th>
                        <th>City/Country</th>
                        <th>Image</th>
                        <th>Galeri</th>
                        <th>Room</th>
                        <th>Durum</th>
                        <th>İşlemler</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $datalist as $rs )
                        <p></p>
                    <tr>
                        <td>{{ $rs -> id }}</td>
                        <td>
                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category , $rs->category->title )}}
                        </td>
                        <td>{{ $rs -> title }}</td>
                        <td>{{ $rs -> address }}</td>
                        <td>{{ $rs -> phone }}</td>
                        <td>{{ $rs -> email }}</td>
                        <td>{{ $rs -> price }}</td>
                        <td>
                            {{ $rs->city  }} /
                            {{$rs->country }}</td>
                        <td>
                            @if ($rs->image)
                                <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                            @endif
                        </td>
                        <td><a href="{{route('admin_image_add' , ['hotel_id' => $rs -> id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700)')">
                                <img src="{{asset('assets/images')}}/image-gallery.png" height="30"></a> </td>


                        <td><a href="" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700)')">
                                <img src="{{asset('assets/images')}}/living-room.png" height="30"></a> </td>

                        <td>{{ $rs -> status }}</td>
                        <td>
                            <a href="{{route('admin_hotel_edit',['id' => $rs->id])}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-edit text-white" ></i></a>
                            <a href="{{route('admin_hotel_delete',['id' => $rs->id])}}" title="Sil" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="fa fa-times" ></i></a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>


@endsection


