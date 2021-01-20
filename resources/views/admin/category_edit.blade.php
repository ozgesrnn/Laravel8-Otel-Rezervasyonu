@extends('layouts.admin')

@section('title' , 'Edit Category')
@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"> </h1>

</div>
   <div class="card-body">

           <form role="form" action="{{route('admin_category_update', ['id' => $data->id ])}}" method="post">
               @csrf
               <div class="card-body">
                   <div class="form-group">
                       <label ><b>Parent</b> </label>

                       <select class="form-control select2" name="parent_id" style="width: 100%;">
                           <option selected="selected">Main Category</option>
                           @foreach($datalist as $rs)
                             <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif > {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title )}} </option>
                           @endforeach
                       </select>
                   </div>
                   <div class="form-group">
                       <label><b>Title</b></label>
                       <input type="text"  name="title" value="{{$data -> title}}" class="form-control" id="title" >
                   </div>
                   <div class="form-group">
                       <label ><b>Keywords</b></label>
                       <input type="text" name="keywords" value="{{$data -> keywords}}"class="form-control" id="exampleInputPassword1" >
                   </div>
                   <div class="form-group">
                       <label ><b>Description</b></label>
                       <input type="text" name="description" value="{{$data -> description}}"class="form-control" id="exampleInputPassword1" >
                   </div>

                   <div class="form-group">
                       <label><b>Status</b></label>
                       <select class="form-control select2" name="status" style="width: 100%;">
                           <option selected="selected">{{$data -> status}}</option>
                           <option >False</option>
                           <option>True</option>
                       </select>
                   </div>
               </div>
               <!-- /.card-body -->

               <div class="card-footer">
                   <button type="submit" class="btn btn-primary">GÜNCELLE</button>
               </div>
           </form>


</div>


@endsection


