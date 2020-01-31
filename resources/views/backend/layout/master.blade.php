<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>FINDOCTOR - Admin dashboard</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="{{ asset('/') }}backend/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('/') }}backend/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('/') }}backend/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('/') }}backend/img/apple-touch-icon-144x144-precomposed.png">
	
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('/') }}backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="{{ asset('/') }}backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="{{ asset('/') }}backend/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="{{ asset('/') }}backend/css/admin.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="{{ asset('/') }}backend/css/admin.css" rel="stylesheet">
	
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->

@include('backend.includes.sidebar')

@yield('content')







@include('backend.includes.footer')




    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/') }}backend/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/') }}backend/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('/') }}backend/vendor/chart.js/Chart.js"></script>
    <script src="{{ asset('/') }}backend/vendor/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('/') }}backend/vendor/datatables/dataTables.bootstrap4.js"></script>
	<script src="{{ asset('/') }}backend/vendor/jquery.selectbox-0.2.js"></script>
	<script src="{{ asset('/') }}backend/vendor/retina-replace.min.js"></script>
	<script src="{{ asset('/') }}backend/vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/') }}backend/js/admin.js"></script>
	<!-- Custom scripts for this page-->
    <script src="{{ asset('/') }}backend/js/admin-charts.js"></script>
	
</body>
</html>
