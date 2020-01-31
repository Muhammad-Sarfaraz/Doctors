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




        <div class="form-wrap">
											<form action="database_backup.php" method="post" id="">
												<div class="form-group">
													<label class="control-label mb-10" >Host</label>
													<input type="text" class="form-control" placeholder="Enter Server Name EX: Localhost" name="server" id="server" required="" autocomplete="on">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" >Database Username</label>
													<input type="text" class="form-control" placeholder="Enter Database Username EX: root" name="username" id="username" required="" autocomplete="on">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" >Database Password</label>
													<input type="password" class="form-control" placeholder="Enter Database Password" name="password" id="password" >
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10">Database Name</label>
													<input type="text" class="form-control" placeholder="Enter Database Name" name="dbname" id="dbname" required="" autocomplete="on">
												</div>
												<div class="form-group text-center">
													<button type="submit" name="backupnow" class="btn btn-info btn-rounded">Initiate Backup</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>





@endsection