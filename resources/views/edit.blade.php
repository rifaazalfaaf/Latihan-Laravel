<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pegawai</title>
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
				background:  linear-gradient(to right, #ff9799,#c63264);
			}
	</style>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar bg-dark navbar-dark">
		<a class="navbar-brand" href="/pegawai" style="color:white;">Khumairah</a>
	</nav>

	<!-- body  -->
	<div class="container">
		<h2 class="judul" align="center">Edit Data Pegawai</h2>
		<br/>


		@foreach($pegawai as $p)
		<form action="/pegawai/update" method="post">
			<div class="form-group">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $p->pegawai_id }}" "> 
			</div>
			
			<div class="form-group">
				<label for="name">Nama  </label>
				<input class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
			</div>

			<div class="form-group">
				<label for="name">Jabatan </label>
				<input class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
			</div>

			<div class="form-group">
				<label for="umur">Umur </label>
				<input class="form-control" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
			</div>

			<div class="form-group">
				<label for="alamat">Alamat </label>
				<textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
			</div>
			<div align="center" style="margin-bottom: 125px;">
				<input type="submit" value="Simpan Data" >
			</div>
			
		</form>
		<!-- <form class="form-group" action="/pegawai/update" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
			<table class="table">
				<tr>
					<td>Nama </td>
					<td> : </td>
					<td><input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"></td>
				</tr>
				<tr>
					<td>Jabatan </td>
					<td> : </td>
					<td><input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"></td>
				</tr>
			 	<tr>
			 		<td>Umur </td>
			 		<td> : </td>
			 		<td><input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"></td>
			 	</tr>
			  	<tr>
			  		<td>Alamat </td>
					<td> : </td>
					<td> <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea></td>
			  	</tr>
			 	<tr>
			 		<td ><input type="submit" value="Simpan Data"></td>
			 	</tr>
			

			</table>
		</form> -->
		@endforeach
	</div>
	<footer>
		<div class="gradient">
		</div>
		<span class="copyright">copyright &copy; 2019</span></div>
  </footer>
  <div class="footer-color"></div>
</body>
</html>