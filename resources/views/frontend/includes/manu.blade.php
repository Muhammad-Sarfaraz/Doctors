<header class="static">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-6">
				<div id="logo">
					<a href="index.html" title="Findoctor"><img src="{{ asset('/') }}frontend/img/logo.png" data-retina="true" alt="" width="163" height="36"></a>
				</div>
			</div>
			<nav class="col-lg-9 col-6">


				<div class="main-menu">
					<ul>
						<li class="submenu">
							<a href="#0" class="show-submenu">Home</a>
						</li>
						<li class="submenu">
							<a href="#0" class="show-submenu">Pages<i class="icon-down-open-mini"></i></a>
							<ul>
								<li><a href="list.html">List page</a></li>
								<li><a href="grid-list.html">List grid page</a></li>
								<li><a href="list-map.html">List map page</a></li>

							</ul>
						</li>
						<li class="submenu">
							<a href="#0" class="show-submenu">Extra Elements<i class="icon-down-open-mini"></i></a>
							<ul>
								<li><a href="detail-page-working-booking.html">Detail working booking</a></li>
								<li><a href="booking-page.html">Booking page</a></li>

							</ul>
						</li>

						<li class="submenu">
							<a href="{{route('account.user.login')}}" class="show-submenu">Log In</a>
						</li>

					</ul>
				</div>
				<!-- /main-menu -->
			</nav>
		</div>
	</div>
	<!-- container -->
</header>
<!-- /Header -->