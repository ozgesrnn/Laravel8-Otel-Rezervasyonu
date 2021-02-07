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
                    <label><b>Kategori</b> </label>

                    <select class="form-control select2" name="category_id" style="width: 100%;">
                        @foreach($datalist as $rs)
                            <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title )}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label><b>Title</b></label>
                    <input type="text" name="title" value="{{$data-> title}}" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label><b>Keywords</b></label>
                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control"
                           id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label><b>Description</b></label>
                    <input type="text" name="description" value="{{$data->description}}" class="form-control"
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
                    <label><b>Price</b></label>
                    <input type="text" name="price" value="{{$data->price}}" class="form-control"
                           id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label><b>City</b></label>
                    <input type="text" name="city" value="{{$data->city}}" class="form-control"
                           id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label><b>Country</b></label>
                    <input type="text" name="country" value="{{$data->country}}" class="form-control"
                           id="exampleInputPassword1">
                </div>

                <div class="form-group">
                <label><b>Detail</b></label>
                    <textarea name="detail" id="editor1" class="ckeditor"></textarea>
                </div>
            <div class="form-group">
                <label><b>Image</b></label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">

                @if ($data->image)
                    <img src="{{Storage::url($rs->image)}}" height="60" alt="">
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





@endsection


