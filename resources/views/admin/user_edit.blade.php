@extends('layouts.admin')

@section('title', 'Edit Hotel')
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endsection

@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">Edit Hotel</h1>

    </div>
    <div class="card-body">

        <form role="form" action="{{route('admin_hotel_update', ['id' => $data->id ])}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label><b>Name</b></label>
                    <input type="text" name="name" value="{{$data->name}}" class="form-control"
                           id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label><b>Address</b></label>
                    <input type="text" name="address" value="{{$data->address}}" class="form-control"
                           id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label><b>Phone</b></label>
                    <input type="number" name="phone" value="{{$data->phone}}" class="form-control"
                           id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label><b>Email</b></label>
                    <input type="text" name="email" value="{{$data->email}}" class="form-control"
                           id="exampleInputPassword1">
                </div>

            <div class="form-group">
                <label><b>Image</b></label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">

                @if ($data->profile_photo_path)
                    <img src="{{Storage::url($rs->profile_photo_path)}}" height="200" alt="">
                @endif
            </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success btn-block">Güncelle</button>
    </div>
            </div>
        </form>
    </div>





@endsection


