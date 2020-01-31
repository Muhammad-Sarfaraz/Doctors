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

                    <form action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="col-xs-3">
                                    <label for="ex1">Name</label>
                                    <input class="form-control" type="text" name="Name" required>
                                </div>
                                </br>
                                <div class="col-xs-2">
                                    <label for="ex1">Language</label>
                                    <select class="form-control" id="Language1580495660" name="fields[Language]" data-rule-required="true" data-msg-required="This field is required." style="">
                                        <option value="Bangla"> Bangla</option>
                                        <option value="English"> English</option>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <label for="ex1">Gender</label>
                                    <select class="form-control" id="Language1580495660" name="fields[Language]" data-rule-required="true" data-msg-required="This field is required." style="">
                                        <option value="Male"> Male</option>
                                        <option value="Female"> Female</option>
                                        <option value="Human"> Human</option>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <label for="ex2">Doctor ID</label>
                                    <input class="form-control" name="studentid" type="text" required>
                                </div>
                                <div class="col-xs-2">
                                    <label for="ex2">Password</label>
                                    <input class="form-control" name="password" type="text" required>
                                </div>



                                <div class="col-xs-4">
                                    <br>
                                    <label for="ex2">Specialties</label>
                                    <input class="form-control" name="Specialties" type="text" required>
                                </div>
                                <div class="col-xs-2">
                                    <br>
                                    <label for="ex2">Phone</label>
                                    <input class="form-control" name="Phone" type="text" required>
                                </div>
                                <div class="col-xs-3">
                                    <br>
                                    <label for="ex1">Email</label>
                                    <input class="form-control" name="Email" type="text" required>
                                </div>

                                <div class="col-xs-3">
                                    <br>
                                    <label for="ex1">Institute</label>
                                    <input class="form-control" name="Institute" type="text" required>
                                </div>
                                <br>
                                <div class="col-xs-3">
                                    <br>
                                    <label for="ex2">Affiliation</label>
                                    <input class="form-control" name="fatherphone" type="text" required>
                                </div>
                                <div class="col-xs-2">
                                    <br>
                                    <label for="ex2">Experience</label>
                                    <input class="form-control" name="Experience" type="text" required>
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