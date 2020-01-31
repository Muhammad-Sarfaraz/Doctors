@extends('frontend.layout.master')
@section('content')
<!-- Main-->
<main>
	<div class="hero_home version_1">
		<div class="content">
			<h3>Find a Doctor!</h3>
			<p>
				Find the right doctor. Get the best care.
			</p>
			<form method="post" action="list.html">
				<div id="custom-search-input">
					<div class="input-group">
						<input type="text" class=" search-query" placeholder="Ex. Name, Specialization, conditions or procedures ....">
						<input type="submit" class="btn_search" value="Search">
					</div>
					<ul>
						<li>
							<input type="radio" id="all" name="radio_search" value="all" checked>
							<label for="all">All</label>
						</li>
						<li>
							<input type="radio" id="doctor" name="radio_search" value="doctor">
							<label for="doctor">Doctor</label>
						</li>
						<li>
							<input type="radio" id="clinic" name="radio_search" value="clinic">
							<label for="clinic">Clinic</label>
						</li>
					</ul>
				</div>
			</form>
		</div>
	</div>
	<!-- /Hero -->

	<div class="container margin_120_95">
		<div class="main_title">
			<h2>Discover the <strong>online</strong> appointment!</h2>
			<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
		</div>
		<div class="row add_bottom_30">
			<div class="col-lg-4">
				<div class="box_feat" id="icon_1">
					<span></span>
					<h3>Find a Doctor</h3>
					<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="box_feat" id="icon_2">
					<span></span>
					<h3>View profile</h3>
					<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="box_feat" id="icon_3">
					<h3>Book a visit</h3>
					<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
				</div>
			</div>
		</div>
		<!-- /row -->
		<p class="text-center"><a href="list.html" class="btn_1 medium">Find Doctor</a></p>

	</div>
	<!-- /container -->

	<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title">
					<h2>Most Viewed doctors</h2>
					<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="box_list home">
							<a href="#0" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="wish_bt"></a>
							<figure>

								<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
								<div class="preview"><span>Read more</span></div>
							</figure>
							<div class="wrapper">
								<small>Psicologist</small>
								<h3>Dr. Watamaniuk</h3>
								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
								<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
							</div>
							<ul>
								<li><i class="icon-eye-7"></i> 854 Views</li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="box_list home">
							<a href="#0" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="wish_bt"></a>
							<figure>

								<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
								<div class="preview"><span>Read more</span></div>
							</figure>
							<div class="wrapper">
								<small>Psicologist</small>
								<h3>Dr. Mantooth</h3>
								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
								<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
							</div>
							<ul>
								<li><i class="icon-eye-7"></i> 854 Views</li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="box_list home">
							<a href="#0" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="wish_bt"></a>
							<figure>

								<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
								<div class="preview"><span>Read more</span></div>
							</figure>
							<div class="wrapper">
								<small>Psicologist</small>
								<h3>Dr. Pullman</h3>
								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
								<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_2.svg" width="15" height="15" alt=""></a>
							</div>
							<ul>
								<li><i class="icon-eye-7"></i> 854 Views</li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="box_list home">
							<a href="#0" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="wish_bt"></a>
							<figure>

								<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
								<div class="preview"><span>Read more</span></div>
							</figure>
							<div class="wrapper">
								<small>Psicologist</small>
								<h3>Dr. Toothaker</h3>
								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
								<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_6.svg" width="15" height="15" alt=""></a>
							</div>
							<ul>
								<li><i class="icon-eye-7"></i> 854 Views</li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="box_list home">
							<a href="#0" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="wish_bt"></a>
							<figure>

								<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
								<div class="preview"><span>Read more</span></div>
							</figure>
							<div class="wrapper">
								<small>Psicologist</small>
								<h3>Dr. Brilliant</h3>
								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
								<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_6.svg" width="15" height="15" alt=""></a>
							</div>
							<ul>
								<li><i class="icon-eye-7"></i> 854 Views</li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="box_list home">
							<a href="#0" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="wish_bt"></a>
							<figure>

								<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
								<div class="preview"><span>Read more</span></div>
							</figure>
							<div class="wrapper">
								<small>Psicologist</small>
								<h3>Dr. Crownover</h3>
								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
								<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
							</div>
							<ul>
								<li><i class="icon-eye-7"></i> 854 Views</li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
				<p class="text-center add_top_30"><a href="list.html" class="btn_1 medium">View all Doctors</a></p>
			</div>
			<!-- /container -->
		</div>
		<!-- /white_bg -->

	<div class="container margin_120_95">
		<div class="main_title">
			<h2>Find your doctor or clinic</h2>
			<p>Nec graeci sadipscing disputationi ne, mea ea nonumes percipitur. Nonumy ponderum oporteat cu mel, pro movet cetero at.</p>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-4 col-lg-5 col-md-6">
				<div class="list_home">
					<div class="list_title">
						<i class="icon_pin_alt"></i>
						<h3>Search by City or Zone</h3>
					</div>
					<ul>
						<li><a href="#0"><strong>23</strong>Albany</a></li>
						<li><a href="#0"><strong>23</strong>Albuquerque</a></li>
						<li><a href="#0"><strong>23</strong>Atlanta</a></li>
						<li><a href="#0"><strong>23</strong>Baltimore</a></li>
						<li><a href="#0"><strong>23</strong>Baton Rouge</a></li>
						<li><a href="#0"><strong>23</strong>Birmingham</a></li>
						<li><a href="#0"><strong>23</strong>Boston</a></li>
						<li><a href="#0"><strong>23</strong>Buffalo</a></li>
						<li><a href="#0"><strong>23</strong>Charleston</a></li>
						<li><a href="#0">More...</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-5 col-md-6">
				<div class="list_home">
					<div class="list_title">
						<i class="icon_archive_alt"></i>
						<h3>Search by type</h3>
					</div>
					<ul>
						<li><a href="#0"><strong>23</strong>Allergist</a></li>
						<li><a href="#0"><strong>23</strong>Cardiologist</a></li>
						<li><a href="#0"><strong>23</strong>Chiropractor</a></li>
						<li><a href="#0"><strong>23</strong>Dentist</a></li>
						<li><a href="#0"><strong>23</strong>Dermatologist</a></li>
						<li><a href="#0"><strong>23</strong>Gastroenterologist</a></li>
						<li><a href="#0"><strong>23</strong>Ophthalmologist</a></li>
						<li><a href="#0"><strong>23</strong>Optometrist</a></li>
						<li><a href="#0"><strong>23</strong>Pediatrician</a></li>
						<li><a href="#0">More....</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->

	<div id="app_section">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-md-5">
					<p><img src="{{ asset('/') }}frontend/img/app_img.svg" alt="" class="img-fluid" width="500" height="433"></p>
				</div>
				<div class="col-md-6">
					<small>Application</small>
					<h3>Download <strong>Findoctor App</strong> Now!</h3>
					<p class="lead">Tota omittantur necessitatibus mei ei. Quo paulo perfecto eu, errem percipit ponderum no eos. Has eu mazim sensibus. Ad nonumes dissentiunt qui, ei menandri electram eos. Nam iisque consequuntur cu.</p>
					<div class="app_buttons wow" data-wow-offset="100">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
							<path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
						</svg>
						<a href="#0" class="fadeIn"><img src="{{ asset('/') }}frontend/img/apple_app.png" alt="" width="150" height="50" data-retina="true"></a>
						<a href="#0" class="fadeIn"><img src="{{ asset('/') }}frontend/img/google_play_app.png" alt="" width="150" height="50" data-retina="true"></a>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /app_section -->
</main>
<!-- /main content -->
@endsection