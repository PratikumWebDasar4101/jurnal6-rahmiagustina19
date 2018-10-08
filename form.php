<?php 

if (isset($_POST['error'])){

	$error=$_POST['error'];

	$pesan="";



	if ($error=="variabel_belum_diset"){

		$pesan="<h3 style='color: pink' >Anda harus mengakses halaman ini dari Formulir</h3>";

	}

	if ($error=="nama_kosong"){

		$pesan="<h3 style='color: pink'>Anda harus mengisi nama</h3>";

	}

	if ($error=="nama_harus_huruf"){

		$pesan="<h3 style='color: pink'>Nama harus berupa huruf</h3>";

	}

} else{

	$error="";

}

?>



<!DOCTYPE html>

<html>

<head>

	<title>Pendaftaran</title>

	<h1><center>PENDAFTARAN</center></h1>

</head>

<body>

	<form action="submit.php" method="post"  enctype="multipart/form-data">

		<table align="CENTER">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"  title="Nama harus max 35 karakter" ></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"  title="Nim harus angka serta 10 karakter"></td>
				</tr>
			<tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td><input type="radio" name="kelas" value="D3MI41-01">D3MI41-01<br>
						<input type="radio" name="kelas" value="D3MI41-02">D3MI41-02<br>
						<input type="radio" name="kelas" value="D3MI41-03">D3MI41-03<br>
						<input type="radio" name="kelas" value="D3MI41-04">D3MI41-04<br></td>
				</tr>
			<tr>
			<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="Pria">Pria<br>
				<input type="radio" name="jk" value="Wanita">Wanita<br></td>
			</tr>
			<tr>

				<td>Hobi</td>

				<td>:</td>

				

				<td>

					<input type="checkbox" name="hobi[]" value="Membaca">Membaca

					<input type="checkbox" name="hobi[]" value="Berenang">Berenang

					<input type="checkbox" name="hobi[]" value="Nontontv">Nonton Tv

					<input type="checkbox" name="hobi[]" value="Travelling">Travelling

					<input type="checkbox" name="hobi[]" value="Online">Online

				</td>

			</tr>
			<tr>

				<td>Fakultas</td>

				<td>:</td>

				<td><select name="fakultas">

					<option value="FEB">FEB</option>

					<option value="FKB">FKB</option>

					<option value="FIK">FIK</option>

					<option value="FRI">FRI</option>

					<option value="FTE">FTE</option>

					<option value="FIF">FIF</option>

					<option value="FIT">FIT</option>

				</select>

				</td>

			</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="textarea" name="alamt" value="alamat"></td>
				</tr>
				<tr>
			<td colspan="3"><input type="submit" name="submit" value="Kirim" align="center"></td>
		</tr>
		</table>
	</form>
</body>
</html>