<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pegawai</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
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
			margin-top: 20px;
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
		}
	</style>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar">
		<a class="nav navbar-brand" href="/pegawai" style="color: #ffff;">Khumairah</a>		
	</nav>

	<!-- body -->
	<h3 class="judul" align="center">Data Pegawai</h3>
	<br/>
	<div class="container">
		<form action="/pegawai/store" method="post">
			<div class="dorm-group">
				{{ csrf_field() }}
			</div>
			<div class="form-group">
				<label for="name">Nama </label>
				<input class="form-control" type="text" name="nama" required="required" placeholder="Masukkan Nama Lengkap">
			</div>

			<div class="form-group">
				<label for="jabatan">Jabatan</label>
				<input class="form-control" type="text" name="jabatan" required="required" placeholder="Masukkan Jabatan">
			</div>
			
			<div class="form-group">
				<label for="umur">Umur</label>
				<input class="form-control" type="number" name="umur" required="required" placeholder="Masukkan Umur">
			</div>

			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" name="alamat" required="required" placeholder="Masukkan Alamat"></textarea>
			</div>
			</br>
			<div align="center" style="margin-bottom: 123px;">
				<input type="submit" value="Simpan Data">
			</div>
		</form>
	</div>

	<!-- footer -->
	<footer>
		<div class="gradient">
		</div>
		<span class="copyright">copyright &copy; 2019</span></div>

  </footer>

  <div class="footer-color"></div>
</body>
</html>