<!DOCTYPE html>
<html>
<head><title>MahasiswaDB: <?php echo $title; ?></title></head>
<body>
	<h1><?php echo $title; ?></h1>
	<img src="/images/unpar.jpg" alt="Logo Unpar"/>
	<p>
		<form action="/mahasiswa/add" method="POST">
			<label>NPM:</label> <input name="npm" type="text"/>
			<label>Nama:</label> <input name="nama" type="text"/>
			<input type="submit" value="Tambah Mahasiswa"/>
		</form>
	</p>