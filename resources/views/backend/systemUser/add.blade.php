@extends('backend.layout.master')

@section('content')


<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Backup</li>
        </ol>

          <!-- /-Breadcrumbs-->

           <!--Form-->

        <div class="form-wrap">
            <form action="{{route('setting.site.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label mb-10">User Name</label>
                    <input type="text" class="form-control" placeholder="Enter Website name " name="suname" required="" autocomplete="on">
                </div>
                <div class="form-group">
                    <label class="control-label mb-10">User Password</label>
                    <input type="password" class="form-control" placeholder="Enter Homepage Note Title" name="supassword" required="" autocomplete="on">
                </div>
                <div class="form-group">
                    <label class="pull-left control-label mb-10">User E-mail</label>
                    <input type="text" class="form-control" placeholder="Enter Website E-mail" name="suemail" required="" autocomplete="on">
                </div>
                <div class="form-group">
                    <label class="pull-left control-label mb-10">Phone</label>
                    <input type="text" class="form-control" placeholder="Enter Phone Number" name="suphone" required="" autocomplete="on">
                </div>
                <div class="form-group">
                    <select class="form-control" id="Role1580492435" name="fields[Role]" data-rule-required="true" data-msg-required="This field is required." style="">
                        <option value="Super Admin"> Super Admin</option>
                        <option value="Admin"> Admin</option>
                        <option value="Editor"> Editor</option>
                    </select>
                </div>
        </div>
        <div class="form-group">
            <label class="pull-left control-label mb-10">User Photo</label>
            <input type="file" class="form-control" placeholder="Upload Logo" name="wlogo" required="" autocomplete="on">
        </div>
        <div class="form-group text-center">
            <button type="submit" name="backupnow" class="btn btn-info btn-rounded">Submit</button>
        </div>
        </form>

        <!--/-Form-->

    </div>
</div>
</div>
</div>





@endsection