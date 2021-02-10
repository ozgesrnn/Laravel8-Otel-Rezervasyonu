<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">

<link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

<link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

<link rel="icon" href="{{asset('assets')}}/images/fevicon.png" type="image/gif"/>

<link rel="stylesheet" href="{{asset('assets')}}/css/jquery.mCustomScrollbar.min.css">

<link rel="stylesheet"
      href="{{asset('assets')}}/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet"
      href="{{asset('assets')}}/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">


<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">User Roles</h1>
   @include('home.message')
</div>
   <div class="card-body">

               <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th rowspan="8" align="center" valign="center">
                                    <td>
                                    @if(Auth::user()->profile_photo_path)
                                        <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="300" style="border-radius: 10px" alt="User Image">
                                    @endif
                                  </td>
                           </tr>
                           <tr>
                               <th>Name</th> <td>{{ $data -> name }}</td>
                           </tr>
                           <tr>
                               <th>Email</th> <td>{{ $data -> email }}</td>
                           </tr>
                           <tr>
                               <th>Phone</th> <td>{{ $data -> phone }}</td>
                           </tr>
                           <tr>
                               <th>Address</th> <td>{{ $data -> address }}</td>
                           </tr>
                           <tr>
                               <th>Date</th> <td>{{ $data -> created_at }}</td>
                           </tr>
                           <tr>
                               <th>Roles</th>
                               <td>
                                   <table>
                                       @foreach($data->roles as $row)
                                           <tr>
                                              <td>{{ $row -> name }}</td>
                                              <td>
                                                   <a href="{{route('admin_user_role_delete',['userid' => $data->id, 'roleid' => $row->id ])}}"  onclick="return confirm('Silmek istediğinize emin misiniz?')"><img src="{{asset('assets/admin/img')}}/delete.png" height="25px"></a>
                                              </td>
                                           </tr>
                                       @endforeach
                                   </table>
                               </td>
                           </tr>
                           <tr>
                               <td>Add Role</td>
                               <td>
                                   <form role="form" action="{{route('admin_user_role_add', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                       @csrf
                                       <select name="roleid">
                                           @foreach($datalist as $rs)
                                               <option value="{{$rs->id}}">{{$rs->name}}</option>
                                           @endforeach
                                       </select>
                                       <button type="submit" class="btn btn-primary ">Add Role</button>
                                   </form>
                               </td>
                           </tr>
                       </table>
                   </div>
               </div>
   </div>





