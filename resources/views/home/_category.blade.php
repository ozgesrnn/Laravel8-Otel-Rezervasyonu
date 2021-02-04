@php
   $parentCategories = \App\Http\Controllers\HomeController::categorylist()
  @endphp

   <div class="card shadow mb-4">
        <div class="card-header py-3">Categories <i class="fa fa-list"></i></div>
       <ul class="category-list">
           @foreach($parentCategories as $rs)
               <li class="dropdown side-dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$rs->title}} <i class="fa fa-angle-right"></i></a>
                   <div class="custom-menu">
                       <div class="row" >

                           @if(count($rs->children))
                               @include('categorytree', ['children ' => $rs->children])
                           @endif
                       </div>
                   </div>
               </li>
       </ul>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Parent</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>İşlemler</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $datalist as $rs )
                    <tr>
                        <td>{{ $rs -> id }}</td>
                        <td>
                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                        </td>
                        <td>{{ $rs -> title }}</td>
                        <td>{{ $rs -> status }}</td>
                        <td>
                            <a href="{{route('admin_category_edit',['id' => $rs->id])}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-edit text-white" ></i></a>
                            <a href="{{route('admin_category_delete',['id' => $rs->id])}}" title="Sil" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="fa fa-times" ></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>


<!-- /.container-fluid -->

</div>


@endsection


