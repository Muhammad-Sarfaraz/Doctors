<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>FINDOCTOR - Find easily a doctor and book online an appointment</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="{{ asset('/') }}frontend/img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('/') }}frontend/img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('/') }}frontend/img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('/') }}frontend/img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('/') }}frontend/img/apple-touch-icon-144x144-precomposed.png">

	<!-- BASE CSS -->
	<link href="{{ asset('/') }}frontend/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('/') }}frontend/css/style.css" rel="stylesheet">
	<link href="{{ asset('/') }}frontend/css/menu.css" rel="stylesheet">
	<link href="{{ asset('/') }}frontend/css/vendors.css" rel="stylesheet">
	<link href="{{ asset('/') }}frontend/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
   
    <!-- SPECIFIC CSS -->
    <link href="{{ asset('/') }}frontend/css/date_picker.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('/') }}frontend/css/custom.css" rel="stylesheet">

</head>

<body>

@include('frontend.includes.manu')

<div class="content-wrapper">


@yield('content')
</div>



@include('frontend.includes.footer')

	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('/') }}frontend/js/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('/') }}frontend/js/common_scripts.min.js"></script>
	<script src="{{ asset('/') }}frontend/js/functions.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ asset('/') }}frontend/js/map_listing.js"></script>
    <script src="{{ asset('/') }}frontend/js/infobox.js"></script>

</body>
</html>