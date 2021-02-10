@extends('layouts.admin')
@section('title','Reservation List')


@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{$datalist->count()}}</strong> Rezervasyon Bulundu.</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                                <th>Id</th>
                                <th>User</th>
                                <th>Hotel</th>
                                <th>Name</th>
                                <th>Total</th>
                                <th>Checkin</th>
                                <th>Checkout</th>
                                <th>Days</th>
                                <th>Note</th>
                                <th>Action</th>
                                <th>İşlemler</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($datalist as $rs )


                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->user_name }}</td>
                                    <td>{{ $rs->hotel_id}}</td>
                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->price }}₺</td>
                                    <td>{{ \Carbon\Carbon::parse($rs->checkin)->format('m-d-Y')}}</td>
                                    <td>{{ \Carbon\Carbon::parse($rs->checkout)->format('m-d-Y')}}</td>
                                    <td>{{ $rs->days}}</td>
                                    <td>{{ $rs->note}}</td>
                                    <td>{{ $rs->status }}</td>

                                    <td>
                                        <a href="{{route('admin_reservation_edit',['id' => $rs->id])}}" title="Düzenle"  class="btn btn-sm btn-primary"><i class="fa fa-edit text-white" ></i></a>
                                        <a href="{{route('admin_reservation_delete',['id' => $rs->id])}}" title="Sil" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="fa fa-times" ></i></a>
                                    </td>

                                </tr>
                            </tbody>
                            @endforeach

                        </table>
                    </div>
                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="card-footer">
                                    Footer
                                </div><!-- /footer-->


        </section><!-- /.content -->


    </div>


@endsection
@section('footer')


    <script src="{{asset('assets')}}/admin/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/ruang-admin.min.js"></script>
    <!-- Page level plugins -->
    <script src="{{asset('assets')}}/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

@endsection
