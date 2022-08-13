<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Portal Beritaku Los Doll Team</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }}">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="{{ asset('css/fileinput.min.css') }}">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="{{ asset('css/awesome-bootstrap-checkbox.css') }}">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
	<div class="brand clearfix">
		<a href="/admin" class="logo"><img src="{{ asset('img/logo.jpg') }}" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a><img src="{{ asset ('img/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> Account </a>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				
				<li class="ts-label">Main</li>
				<li><a href="/list"><i class="fa fa-table"></i> List Berita</a></li>
				<li><a href="/daftar"><i class="fa fa-pie-chart"></i> Daftar Admin</a></li>
			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Edit Berita</h2>
						
						

						<div class="row">
							<div class="col-md-6">
								<a href="/list" style="text-decoration: none">Kembali</a>
								<form method="post" action="/updet">
								{{ csrf_field() }}
								@foreach($tambah as $t)
								<input type="hidden" name="id" value="{{ $t->id }}">
								Judul : <br>
								<input type="text" name="judul" value="{{ $t->judul }}" required placeholder='Judul' style="width:400px; height: 30px;"><br><br>
								Deskripsi : <br>
								<textarea name="deskripsi" required style="resize:none; width:1090px; height:300px;">{{ $t->deskripsi }}</textarea><br><br>
								<input type="submit" value="Simpan Edit">
								@endforeach
								</form>
							</div>
						</div>
												
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>

</html>