@extends('layouts.admin')

@section('title', '  Ayarlar ')

@section('content')

    <form role="form" action="{{route('admin_setting_update')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4>Ayarlar</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" required class="form-control" value="{{$setting->title}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" name="keywords" required class="form-control"
                                   value="{{$setting->keywords}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" required class="form-control"
                                   value="{{$setting->description}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" required class="form-control" value="{{$setting->company}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option @if($setting->status==1) selected @endif value="1">Açık</option>
                                <option @if($setting->status==0) selected @endif value="0">Kapalı</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" required class="form-control" value="{{$setting->address}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" required class="form-control" value="{{$setting->phone}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" name="fax" required class="form-control" value="{{$setting->fax}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" required class="form-control" value="{{$setting->email}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Smtpserver</label>
                            <input type="text" name="smtpserver" required class="form-control"
                                   value="{{$setting->smtpserver}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Smtpemail</label>
                            <input type="text" name="smtpemail" required class="form-control"
                                   value="{{$setting->smtpemail}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Smtppassword</label>
                            <input type="password" name="smtppassword" required class="form-control"
                                   value="{{$setting->smtppassword}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Smtpport</label>
                            <input type="text" name="smtpport" required class="form-control"
                                   value="{{$setting->smtpport}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" required class="form-control"
                                   value="{{$setting->facebook}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" name="instagram" required class="form-control"
                                   value="{{$setting->instagram}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" required class="form-control"
                                   value="{{$setting->twitter}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Aboutus</label>
                            <input type="text" name="aboutus" required class="form-control"
                                   value="{{$setting->aboutus}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" name="contact" required class="form-control"
                                   value="{{$setting->contact}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>References</label>
                            <input type="text" name="references" required class="form-control"
                                   value="{{$setting->references}}"/>
                        </div>
                    </div>

                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </div>
    </form>

    @endsection


