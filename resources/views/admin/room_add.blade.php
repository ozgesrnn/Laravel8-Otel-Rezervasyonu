@extends('layouts.admin')

@section('title', 'Add Category')
@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">Add Category</h1>

    </div>
    <div class="card-body">

        <form role="form" action="{{route('admin_room_store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Hotel</label>

                <select class="select2-single form-control" name="hotel_id" id="select2Single">
                    @foreach($datalist as $rs )

                        <option value="{{ $rs->id }}">{{$rs->title}}</option>

                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" class="form-control">
            </div>

            <div class="form-group">
                <label>İmage</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="select2-single form-control" name="status" id="select2Single">
                    <option selected="selected" value="False">False</option>
                    <option value="True">True</option>

                </select>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">ODA EKLE</button>
            </div>
        </form>


    </div>


@endsection


