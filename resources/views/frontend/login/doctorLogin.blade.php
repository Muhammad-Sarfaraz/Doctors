
@extends('frontend.layout.master')

@section('content')

<main>
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="login-2">
                <h1>Doctors login!</h1>
					<h1></h1>
					<form>
						<div class="box_form clearfix">
							<div class="box_login">

                                <img src="" height="200" width="270"></img>
                            
                            </div>
							<div class="box_login last">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Your email address">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Your password">
									<a href="#0" class="forgot"><small>Forgot password?</small></a>
								</div>
								<div class="form-group">
									<input class="btn_1" type="submit" value="Login">
								</div>
							</div>
						</div>
					</form>
					<p class="text-center link_bright">Do not have an account yet? <a href="{{route('account.doctor.create')}}"><strong>Register now!</strong></a></p>
				</div>
				<!-- /login -->
			</div>
		</div>
    </main>
    
    @endsection