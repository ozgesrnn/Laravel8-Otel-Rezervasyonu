@extends('layouts.admin')

@section('title', 'Add Hotel')
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-4 text-gray-800">Otel Ekle</h1>
        </div>
   <div class="card-body">

           <form role="form" action="{{route('admin_hotel_store')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="card-body">
                   <div class="form-group">
                       <label ><b>Kategori</b> </label>

                       <select class="form-control select2" name="category_id" style="width: 100%;">
                           <option selected="selected">Main Category</option>
                           @foreach($datalist as $rs)
                             <option value="{{$rs->id}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title )}}</option>
                           @endforeach
                       </select>
                   </div>
                   <div class="form-group">
                       <label><b>Başlık</b></label>
                       <input type="text" name="title" class="form-control" >
                   </div>
                   <div class="form-group">
                       <label ><b>Keywords</b></label>
                       <input type="text" name="keywords" class="form-control"  >
                   </div>
                   <div class="form-group">
                       <label ><b>Açıklama</b></label>
                       <input type="text" name="description" class="form-control"  >
                   </div>
                   <div class="form-group">
                       <label ><b>Address</b></label>
                       <input type="text" name="address" class="form-control"  >
                   </div>
                   <div class="form-group">
                       <label ><b>Phone</b></label>
                       <input type="number" name="phone" class="form-control"  >
                   </div>
                   <div class="form-group">
                       <label ><b>Email</b></label>
                       <input type="text" name="email" class="form-control"  >
                   </div>
                   <div class="form-group">
                       <label ><b>Price</b></label>
                       <input type="text" name="price" class="form-control"  >
                   </div>
                   <div class="form-group">
                       <label><b>Detail</b></label>
                       <textarea id="editor1" class="ckeditor"></textarea>
                   </div>
                   </div>
                   <div class="form-group">
                       <label ><b>Image</b></label>
                       <input type="file" name="image" class="form-control"  >
                   </div>
                   <div class="form-group">
                       <label><b>Durum</b></label>
                       <select class="form-control select2" name="status" style="width: 100%;">
                           <option value="">Seçim Yapınız</option>
                           <option>Aktif</option>
                           <option>Pasif</option>
                       </select>
                   </div>
               </div>
               <!-- /.card-body -->

               <div class="card-footer">
                   <button type="submit" class="btn btn-primary btn-block">Otel Oluştur</button>
               </div>
           </form>


   </div>

        @endsection


