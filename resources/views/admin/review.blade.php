@extends('layouts.admin')

@section('title', 'Contact Messages List')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{$datalist->count()}}</strong> Yorum Bulundu.</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>User Id</th>
                        <th>Hotel Id</th>
                        <th>Subject</th>
                        <th>Review</th>
                        <th>Rate</th>
                        <th>Action</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>



                        <th style="" colspan="3">İşlemler</th>


                    @foreach( $datalist as $rs )
                        <p></p>
                    <tr>

                        <td>{{ $rs->id }}</td>
                        <td>{{ $rs->user_id }}</td>
                        <td>{{ $rs->hotel->title }}</td>
                        <td>{{ $rs->subject }}</td>
                        <td>{{ $rs->review }}</td>
                        <td>{{ $rs->rate}}</td>
                        <td>{{ $rs -> status }}</td>
                        <td><a href="{{route('admin_message_edit',['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700)')">
                                <img src="{{asset('assets/images')}}/image-gallery.png" height="30"></a> </td>
                        <td>
                            <a href="{{route('admin_message_delete',['id' => $rs->id])}}" title="Sil" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="fa fa-times" ></i></a>
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


