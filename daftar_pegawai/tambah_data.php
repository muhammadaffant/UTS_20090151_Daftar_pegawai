<head>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6">
	<h3 class="text-center">TAMBAH DATA PEGAWAI</h3>

	<a class="btn btn-primary" href="home.php" role="button">Kembali</a>

	<form action="proses-tambah.php" method="post">
		<div class="form-group">
		<label for="nip">NIP</label>
			<input type="text" class="form-control" name="nip" id="nip">
		</div>

		<div class="form-group">
		<label for="nama_pegawai">Nama Pegawai</label>
			<input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai">
		</div>

		<div class="form-group">
		<label for="alamat">Alamat</label>
			<input type="text" class="form-control" name="alamat" id="alamat">
		</div>

		<div class="form-group">
		<label for="jabatan">Jabatan</label>
			<input type="text" class="form-control" name="jabatan" id="jabatan">
		</div>

		<div class="form-group">
		<label for="tgl_masuk">Tgl Masuk</label>
			<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk">
		</div>

		<div class="form-group">
		<label for="divisi">Divisi</label>
			<input type="text" class="form-control" name="divisi" id="divisi">
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
	</form>

</div>
</div>
</body>

