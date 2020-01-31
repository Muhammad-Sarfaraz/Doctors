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
			<form action="{{route('setting.site.store')}}" method="post" enctype="multipart/form-data">
			@csrf	
			<div class="form-group">
					<label class="control-label mb-10">Website Name</label>
					<input type="text" class="form-control" placeholder="Enter Website name " name="wname"  required="" autocomplete="on">
				</div>
				<div class="form-group">
					<label class="control-label mb-10">Website Title</label>
					<input type="text" class="form-control" placeholder="Enter Homepage Note Title" name="wtitle"  required="" autocomplete="on">
				</div>
				<div class="form-group">
					<label class="pull-left control-label mb-10">Homepage Note Description</label>
					<textarea rows="4"  cols="50" class="form-control" name="wdescription"></textarea>
				</div>

				<div class="form-group">
					<label class="pull-left control-label mb-10">Website E-mail</label>
					<input type="text" class="form-control" placeholder="Enter Website E-mail" name="wemail" required="" autocomplete="on">
				</div>
				<div class="form-group">
					<label class="pull-left control-label mb-10">Phone</label>
					<input type="text" class="form-control" placeholder="Enter Phone Number" name="wphone" required="" autocomplete="on">
				</div>

								<div class="form-group">
					<label class="pull-left control-label mb-10">Copyright Text</label>
					<input type="text" class="form-control" placeholder="Enter Copyright Text" name="wfooter"  required="" autocomplete="on">
				</div>
				<div class="form-group">
					<label class="pull-left control-label mb-10">Logo</label>
					<input type="file" class="form-control" placeholder="Upload Logo" name="wlogo" required="" autocomplete="on">
				</div>
				<div class="form-group text-center">
					<button type="submit" name="backupnow" class="btn btn-info btn-rounded">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>





@endsection