<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Los Doll News</title>
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="{{ asset('css/all.css') }}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-ligt top-nav fixed-top">
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
                     <a class="nav-link active" href="/user">Home</a>
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
    <header class="slider-main">
    </header>
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                <center>
                  <h2>Selamat Datang di Portal Berita Loss Doll</h2>
                  <p>Portal berita tajam dan terpercaya, dengan membaca berita disini anda akan memperoleh banyak informasi yang akurat. Jika anda tidak percaya mari kita buktikan bersama. Jika anda tidak mau membaca, yasudah sampai disini. </p>
               </center>
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="{{ asset('images/about-img.jpg') }}" alt="" />
               </div>
            </div>
            <!-- /.row -->
        </div>
    <!-- /.container -->
    <!--footer starts from here-->
    <div class="footer">
      <div class="container bottom_border">
            <!--foote_bottom_ul_amrc ends here-->
            <ul class="social_footer_ul">
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>
    </footer>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>