@extends('layouts.admin')

@section('title', 'Room List')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{$datalist->count()}}</strong> Room Bulundu.</h6>
            <a href="" type="submit" class="btn btn-primary">Room Ekle</a>
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
                @foreach($datalist as $rs )
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->description}}</td>
                        <td>{{$rs->price}} TL</td>
                        <td>{{$rs->adet}}</td>
                        <td>{{$rs->slug}}</td>
                        <td>
                            @if ($rs->image)
                                <img src="{{ Storage::url($rs->image) }}" height="30" alt="">
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin_room_edit',['id' => $rs->id,'hotel_id' => $rs->id])}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-edit text-white" ></i></a>
                            <a href="{{route('admin_room_delete',['id' => $rs->id,'hotel_id' => $rs->id])}}" title="Sil" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="fa fa-times" ></i></a>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>





    <!-- /.container-fluid -->

    </div>


@endsection


