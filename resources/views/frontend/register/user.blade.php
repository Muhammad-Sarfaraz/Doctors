
@extends('frontend.layout.master')



@section('content')


<main>
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="register">
					<h1>Please register to Findoctor!</h1>
					<div class="row justify-content-center">
						<div class="col-md-5">
							<form>
								<div class="box_form">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" placeholder="Your name">
									</div>
									<div class="form-group">
										<label>Last name</label>
										<input type="text" class="form-control" placeholder="Your last name">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" placeholder="Your email address">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" id="password1" placeholder="Your password">
									</div>
									<div class="form-group">
										<label>Confirm password</label>
										<input type="password" class="form-control" id="password2" placeholder="Confirm password">
									</div>
									<div id="pass-info" class="clearfix"></div>
									<div class="checkbox-holder text-left">
										<div class="checkbox_2">
											<input type="checkbox" value="accept_2" id="check_2" name="check_2" checked>
											<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
										</div>
									</div>
									<div class="form-group text-center add_top_30">
										<input class="btn_1" type="submit" value="Submit">
									</div>
								</div>
								<p class="text-center"><small>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. Eum no atqui putant democritum, velit nusquam sententiae vis no.</small></p>
							</form>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /register -->
			</div>
		</div>
	</main>
    <!-- /main -->
    
    @endsection