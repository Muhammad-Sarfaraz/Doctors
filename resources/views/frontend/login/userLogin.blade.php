
@extends('frontend.layout.master')

@section('content')

<main>
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="login-2">
                    <h1>Please login to Findoctor!</h1>
                    <p class="text-center link_bright">Are you a doctor?<a href="{{route('account.doctor.login')}}"><strong>Login here!</strong></a></p>
					<form action="{{route('user.login.post')}}" method="post" enctype="multipart/form-data">
					@csrf	
					<div class="box_form clearfix">
							<div class="box_login">
								<a href="#0" class="social_bt facebook">Login with Facebook</a>
								<a href="#0" class="social_bt google">Login with Google</a>
								<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
							</div>
							<div class="box_login last">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Your email address" name="email" required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Your password" name="password" required>
									<a href="#0" class="forgot"><small>Forgot password?</small></a>
								</div>
								<div class="form-group">
									<input class="btn_1" type="submit" value="Login">
								</div>
							</div>
						</div>
					</form>
					<p class="text-center link_bright">Do not have an account yet? <a href="{{route('account.user.create')}}"><strong>Register now!</strong></a></p>
				</div>
				<!-- /login -->
			</div>
		</div>
    </main>
    
    @endsection