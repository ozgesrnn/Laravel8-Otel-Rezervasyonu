@extends('layouts.admin')

@section('title' , 'Edit Category')
@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"> </h1>

</div>
   <div class="card-body">

       <form role="form" action="{{route('admin_room_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
           @csrf
           <div class="card-body">
               <div class="form-group">
                   <label>Hotel</label>

                   <select class="select2-single form-control" name="hotel_id" id="select2Single">

                       @foreach($datalist as $rs )

                           <option value="{{ $rs->id }}"  @if ($rs->id == $data->title) selected="selected" @endif >
                               {{ $rs->title }}
                           </option>
                       @endforeach
                   </select>
               </div>
               <div class="form-group">
                   <label >Title</label>
                   <input type="text" name="title" value="{{$data->title}}" class="form-control" >
               </div>
               <div class="form-group">
                   <label>Description</label>
                   <input type="text" name="description" value="{{$data->description}}" class="form-control" >
               </div>


               <div class="form-group">
                   <label>Image</label>
                   <input type="file" name="image"  class="form-control">
                   @if ($data->image)
                       <img src="{{ Storage::url($data->image)}}" height="100" alt="">
                   @endif
               </div>

               <div class="form-group">
                   <label>Price</label>
                   <input type="number" name="price" value="{{$data->price}}" class="form-control" >
               </div>
               <div class="form-group">
                   <label>Adet</label>
                   <input type="number" name="adet" value="{{$data->adet}}" class="form-control" >
               </div>
               <div class="form-group">
                   <label>Slug</label>
                   <input type="text" name="slug" class="form-control" >
               </div>
               <div class="form-group">
                   <label >Status</label>
                   <select class="select2-single form-control" name="status" id="select2Single">

                       <option value="True">True</option>
                       <option  value="False">False</option>

                   </select>
               </div>

               <!-- /.card-body -->

               <div class="card-footer">
                   <button type="submit" class="btn btn-primary">GÜNCELLE</button>
               </div>
           </form>


</div>


@endsection


