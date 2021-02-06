@extends('layouts.admin')

@section('title', 'Room List')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{$datalist->count()}}</strong> Oda Bulundu.</h6>
            <a href="{{route('admin_room_add')}}" type="submit" class="btn btn-primary">Oda Ekle</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Adet</th>
                        <th>Status</th>
                        <th>İmage</th>

                        <th style="" colspan="3">İşlemler</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $datalist as $rs )
                        <p></p>
                    <tr>
                        <td>{{ $rs -> hotel_id }}</td>
                        <td>{{ $rs -> title }}</td>
                        <td>{{ $rs -> description }}</td>
                        <td>{{ $rs -> price }}</td>
                        <td>{{ $rs -> adet }}</td>
                        <td>{{ $rs -> status }}</td>
                        <td><a href="{{route('admin_room_edit',['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700)')">
                                <img src="{{asset('assets/images')}}/living-room.png" height="30"></a> </td>
                        <td>
                            <a href="{{route('admin_room_delete',['id' => $rs->id])}}" title="Sil" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="fa fa-times" ></i></a>
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


