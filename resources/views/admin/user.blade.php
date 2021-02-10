@extends('layouts.admin')

@section('title', 'User List')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{$datalist->count()}}</strong> Kullanıcı Bulundu.</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th></th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th style="" colspan="2">İşlemler</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $datalist as $rs )
                        <p></p>
                    <tr>
                        <td>{{ $rs -> id }}</td>
                        <td>
                            @if($rs->profile_photo_path)
                                <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                            @endif
                         </td>
                        <td>{{ $rs -> name }}</td>
                        <td>{{ $rs -> address }}</td>
                        <td>{{ $rs -> phone }}</td>
                        <td>{{ $rs -> email }}</td>
                        <td>@foreach( $rs -> roles as $row)
                            {{ $row->name }}
                            @endforeach
                            <a href="{{route('admin_user_roles' ,['id' => $rs->id])}}"  onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700)')">
                                <i class="nav-icon fas fa-plus-circle"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('admin_user_edit',['id' => $rs->id])}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-edit text-white" ></i></a>
                            <a href="{{route('admin_user_delete',['id' => $rs->id])}}" title="Sil" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="fa fa-times" ></i></a>
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


