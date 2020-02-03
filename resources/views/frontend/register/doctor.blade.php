@extends('frontend.layout.master')



@section('content')
<main>
	<div id="hero_register">
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-6">
					<h1>It's time to find you!</h1>
					<p class="lead">Te pri adhuc simul. No eros errem mea. Diam mandamus has ad. Invenire senserit ad has, has ei quis iudico, ad mei nonumes periculis.</p>
					<div class="box_feat_2">
						<i class="pe-7s-map-2"></i>
						<h3>Let patients to Find you!</h3>
						<p>Ut nam graece accumsan cotidieque. Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet.</p>
					</div>
					<div class="box_feat_2">
						<i class="pe-7s-date"></i>
						<h3>Easly manage Bookings</h3>
						<p>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. Eum no atqui putant democritum, velit nusquam sententiae vis no.</p>
					</div>
					<div class="box_feat_2">
						<i class="pe-7s-phone"></i>
						<h3>Instantly via Mobile</h3>
						<p>Eos eu epicuri eleifend suavitate, te primis placerat suavitate his. Nam ut dico intellegat reprehendunt, everti audiam diceret in pri, id has clita consequat suscipiantur.</p>
					</div>
				</div>
				<!-- /col -->
				<div class="col-lg-5 ml-auto">
				@if(Session::has("status"))
						  {{ Session::get('status')}} 
		 <strong><a href="{{route('account.doctor.login')}}">Login</a></strong>
						@endif
					<div class="box_form">
						<div id="message-register"></div>
						<form method="post" action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">
						@csrf	
						
						<div class="row">
								<div class="col-lg-12 ">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}" required>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Specialization" name="specialization"  required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Type" name="type"  required>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="City" name="city" value="{{old('city')}}"  required>
									</div>
								</div>
								<!-- /row -->
								<div class="col-md-6">
									<div class="form-group">
										<select class="form-control" name="gender"  required >
											<option value="">Gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Institute" name="institute" value="{{old('institute')}}" required >
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Affiliation" name="affiliation" value="{{old('affiliation')}}" required >
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Mobile Phone" name="phone" value="{{old('phone')}}"  required >
									</div>
								</div>
								<!-- /row -->
								<div class="col-md-6">
									<div class="form-group">
										<select class="form-control" name="experience" >
											<option value="">Experience</option>
											<option value="1">1 years</option>
											<option value="2">2 years</option>
											<option value="3">3 years</option>
											<option value="4">4 years</option>
											<option value="5">5 years</option>
											<option value="6">6 years</option>
											<option value="7">7 years</option>
											<option value="8">8 years</option>
											<option value="9">9 years</option>
											<option value="10">10 years</option>
											<option value="above 10 years">above 10 years</option>
										</select>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email Address" name="email" value="{{old('email')}}" required>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Password" name="password" value="" required>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div><input type="submit" class="btn_1" value="Submit" required></div>
						</form>
					</div>
					<!-- /box_form -->
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /hero_register -->
</main>
@endsection