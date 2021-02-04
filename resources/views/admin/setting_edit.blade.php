@extends('layouts.admin')

@section('title', 'Edit Hotel')
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @endsection

@section('content')
<div class="container-fluid">

</div>


    <!-- ./row -->

        <form role="form" action="{{route('admin_setting_update')}}" method="post">
            <section class="content">
            @csrf
            <div class="row">
            <div class="card card-primary card-tabs col-12">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-general" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="pill" href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill" href="#custom-tabs-one-social" role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Social Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-aboutus-tab" data-toggle="pill" href="#custom-tabs-one-aboutus" role="tab" aria-controls="custom-tabs-one-aboutus" aria-selected="false">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references" role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">

                            <input type="hidden" id="id"  name="id" value="{{$setting-> id}}" class="form-control"  >

                            <div class="form-group">
                                <label><b>Title</b></label>
                                <input type="text" id="title" name="title" value="{{$setting-> title}}" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label ><b>Keywords</b></label>
                                <input type="text" name="keywords" value="{{$setting->keywords}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>Description</b></label>
                                <input type="text" name="description" value="{{$setting->description}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>company</b></label>
                                <input type="text" name="company" value="{{$setting->company}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>address</b></label>
                                <input type="text" name="address" value="{{$setting->address}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>Phone</b></label>
                                <input type="number" name="phone" value="{{$setting->phone}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>fax</b></label>
                                <input type="number" name="fax" value="{{$setting->fax}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>Email</b></label>
                                <input type="text" name="email" value="{{$setting->email}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label><b>Status</b></label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option value="">{{$setting->status}}</option>
                                    <option>Aktif</option>
                                    <option>Pasif</option>
                                </select>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel" aria-labelledby="custom-tabs-one-smtp-tab">
                            <div class="form-group">
                                <label ><b>smtpserver</b></label>
                                <input type="text" name="smtpserver" value="{{$setting->smtpserver}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>smtpemail</b></label>
                                <input type="text" name="smtpemail" value="{{$setting->smtpemail}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>smtppassword</b></label>
                                <input type="password" name="smtppassword" value="{{$setting->smtppassword}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>smtpport</b></label>
                                <input type="text" name="smtpport" value="{{$setting->smtpport}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel" aria-labelledby="custom-tabs-one-social-tab">
                            <div class="form-group">
                                <label ><b>facebook</b></label>
                                <input type="text" name="facebook" value="{{$setting->facebook}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>instagram</b></label>
                                <input type="text" name="instagram" value="{{$setting->instagram}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label ><b>twitter</b></label>
                                <input type="text" name="twitter" value="{{$setting->twitter}}" class="form-control" id="exampleInputPassword1" >
                            </div>
                        </div>

                        <div class="tab-pane fade" id="custom-tabs-one-aboutus"  role="tabpanel" aria-labelledby="custom-tabs-one-aboutus-tab">
                            <div class="form-group">
                                <label><b>Aboutus</b></label>
                                <div class="form-group">
                                    <textarea name="aboutus" id="editor1" class="ckeditor">{{$setting->aboutus}}></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact-tab">
                            <div class="form-group">
                                <label><b>Contact</b></label>
                                <div class="form-group">
                                    <textarea name="contact" id="editor1" class="ckeditor">{{$setting->contact}}></textarea>
                                </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-references"  role="tabpanel" aria-labelledby="custom-tabs-one-references-tab">
                            <div class="form-group">
                                <label><b>References</b></label>
                                <div class="form-group">
                                    <textarea name="references" id="editor1" class="ckeditor">{{$setting->references}}</textarea>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-block">Güncelle</button>
                </div>
            </div>
            </div>
            </section>
        </form>



@endsection


