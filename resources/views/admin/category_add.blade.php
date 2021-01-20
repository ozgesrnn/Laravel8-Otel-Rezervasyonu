@extends('layouts.admin')

@section('title', 'Add Category')
@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Add Category</h1>

</div>
   <div class="card-body">

           <form role="form" action="{{route('admin_category_create')}}" method="post">
               @csrf
               <div class="card-body">
                   <div class="form-group">
                       <label ><b>Parent Category</b> </label>

                       <select class="form-control select2" name="parent_id" style="width: 100%;">
                           <option selected="selected">Main Category</option>
                           @foreach($datalist as $rs)
                             <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title )}}</option>
                           @endforeach
                       </select>
                   </div>
                   <div class="form-group">
                       <label><b>Title</b></label>
                       <input type="text" name="title" class="form-control" id="exampleInputPassword1" >
                   </div>
                   <div class="form-group">
                       <label ><b>Keywords</b></label>
                       <input type="text" name="keywords" class="form-control" id="exampleInputPassword1" >
                   </div>
                   <div class="form-group">
                       <label ><b>Description</b></label>
                       <input type="text" name="description" class="form-control" id="exampleInputPassword1" >
                   </div>

                   <div class="form-group">
                       <label><b>Status</b></label>
                       <select class="form-control select2" name="status" style="width: 100%;">
                           <option selected="selected">False</option>
                           <option>True</option>
                       </select>
                   </div>
               </div>
               <!-- /.card-body -->

               <div class="card-footer">
                   <button type="submit" class="btn btn-primary">EKLE</button>
               </div>
           </form>


</div>


@endsection


