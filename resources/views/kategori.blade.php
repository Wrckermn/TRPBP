<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>N & LW Lawn Care - Landscaping Bootstrap4 HTML5 Responsive Template </title>
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="{{ asset('css/all.css') }}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand">
             <img src="{{ asset('images/logo.jpeg') }}" alt="logo" style="width: 100px" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="/user">Home</a>
                  </li>
                  @foreach($tambah as $t)
                  <li class="nav-item">
                     <a class="nav-link" href="/kategori/{{ $t->kategori }}">{{ $t->kategori }}</a>
                  </li>
                  @endforeach
               </ul>
            </div>
        </div>
    </nav>
    <center>
    	@foreach($tambah as $t)
    	<h2>{{ $t->judul }}</h2>
    	<p>{{ $t->deskripsi }}</p><br>
    	@endforeach
    </center>
    <!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
