@extends('backend.layout.master')

@section('content')


<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Doctors</li>
        </ol>

        <!-- /-Breadcrumbs-->

        <!--Form-->
        <div class="container-fluid pt-3 border bg-white text-black">
            <div class="row">
                <div class="col-sm-12">

                

                    <h2>Doctor Registration Form</h2>
                    <br>

                    <form action="{{route('account.doctor.register')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="col-xs-3">
                                    <label for="ex1">Name</label>
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                                </br>
                                
                                <div class="col-xs-2">
                                    <label for="ex1">Gender</label>
                                    <select class="form-control"  name="gender"  >
                                        <option value="Male"> Male</option>
                                        <option value="Female"> Female</option>
                                    </select>
                                </div>

                                <div class="col-xs-2">
                                    <label for="ex2">City</label>
                                    <input class="form-control" name="city" type="text" required>
                                </div>
                                

                                <div class="col-xs-2">
                                    <label for="ex2">Password</label>
                                    <input class="form-control" name="password" type="password" required>
                                </div>



                                <div class="col-xs-4">
                                    <br>
                                    <label for="ex2">Specialization</label>
                                    <input class="form-control" name="specialization" type="text" required>
                                </div>
                                <div class="col-xs-2">
                                    <br>
                                    <label for="ex2">Phone</label>
                                    <input class="form-control" name="phone" type="text" required>
                                </div>
                                <div class="col-xs-3">
                                    <br>
                                    <label for="ex1">Email</label>
                                    <input class="form-control" name="email" type="text" required>
                                </div>

                                <div class="col-xs-3">
                                    <br>
                                    <label for="ex1">Institute</label>
                                    <input class="form-control" name="institute" type="text" required>
                                </div>
                                <br>
                                <div class="col-xs-3">
                                    <br>
                                    <label for="ex2">Affiliation</label>
                                    <input class="form-control" name="affiliation" type="text" required>
                                </div>
                                <div class="col-xs-2">
                                    <br>
                                    <label for="ex2">Experience</label>
                                    <input class="form-control" name="experience" type="text" required>
                                </div>

                                <div class="col-xs-4">
                                    <br>
                                    <input type="submit" class="btn btn-danger" value="submit form">
                                    <br>
                                    <br>
                                </div>
                            </div>
                    </form>

                    <!--/-Form-->

                </div>
            </div>
        </div>
    </div>





    @endsection