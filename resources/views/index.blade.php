<!DOCTYPE html>
<html>
<head>
	<title>Khumairah</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
		/*navbar*/
		.navbar{
			/*background:  linear-gradient(to right, #fadce4,  #ffb5cc);*/
			background:  linear-gradient(to right, #ff9799,  #c63264);
		}

	/*body*/
		body{
			background-color: #F7F8FA;
		}
		.judul{
			margin-top:20px;
		}
		.form-group:active{
			
		}

		textarea:focus, 
		textarea.form-control:focus, 
		input.form-control:focus, 
		input[type=text]:focus,.form-control:focus, 
		[contenteditable].form-control:focus {
		  box-shadow: inset 0 -2px 0 #c63264;
		}

		input[type="submit"]{
			background-color:#ff9799;
		}

	/*footer*/
		footer{
			background: #FFFFFF;
		  	height: 50px;
		  	text-indent: 50px;
		  	border-top: 10px brown;
		}
		.copyright{
		  	font-size: 15px;
		  	padding:;
		}

		.gradient{
			border-top: 10px #efeff1; 
		}
		.footer-color{
			height: 7px;
			background:  linear-gradient(to right, #ff9799,  #c63264);
		}	</style>
	
</head>
<body>
	<!-- navbar -->
	<nav class="navbar" >
		<a class="navbar-brand navbar-right" href="/pegawai"style="color:white;">Khumairah</a>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item" align="right"><a href="/pegawai/tambah" style="color:white;"> + Tambah Pegawai Baru</a></li>
		</ul>
		
	</nav>

	<!-- body -->
	<div class="container-fluid judul">
		<h3 class="pegawai" style="text-align: center;">Data Pegawai</h3>
		<br/>

		<table class="table">
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
			@foreach($pegawai as $p)
			<tr>
				<td>{{ $p->pegawai_nama }}</td>
				<td>{{ $p->pegawai_jabatan }}</td>
				<td>{{ $p->pegawai_umur }}</td>
				<td>{{ $p->pegawai_alamat }}</td>
				<td><a href="/pegawai/edit/{{$p->pegawai_id }}">Edit</a>
					|
					<a href="/pegawai/hapus/{{$p->pegawai_id }}">Hapus</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	<div style="min-height: 432px">	</div>

<!-- footer -->
	<footer>
		<div class="gradient">
		</div>
		<span class="copyright">copyright &copy; 2019</span></div>

	</footer>

	<div class="footer-color"></div>
</body>
</html>