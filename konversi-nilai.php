<!DOCTYPE html>
<html>

<head>
<style>
body {
   background-image: url('konversi.jpeg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: 100% 100%;
}
	<meta charset="utf-8">
	<title>Konversi Nilai Mahasiswa</title>
</style>
</head>

<body id="body">
	<left>
		<h1><b>Konversi Nilai Mahasiswa</b></h1>
		<form action="konversi.php" method="POST">
			<table>
				<tr>
					<td><b>Nama Mahasiswa</b></td>
					<td><input type="text" name="nama" onkeypress='return huruf(event)' required></td>

				<tr>
					<td><b>Mata Kuliah</b></td>
					<td><input type="text" name="matkul" required></td>
				</tr>

				<tr>
					<td><b>Nilai Absen</b></td>
					<td><input id="input" name="absen" onkeypress="return numbers(event)" type=" text" required></td>
				</tr>

				<tr>
					<td><b>Nilai Tugas</b></td>
					<td><input type="text" name="tugas" onkeypress="return numbers(event)" required></td>
				</tr>

				<tr>
					<td><b>Nilai UTS</b></td>
					<td><input type="text" name="uts" onkeypress="return numbers(event)" required></td>
				</tr>

				<tr>
					<td><b>Nilai UAS</b></td>
					<td><input type="text" name="uas" onkeypress="return numbers(event)" required></td>
				</tr>

				<tr>
					<td></td>
					<td><button type="submit" value="hitung"><b>Hitung</b></button></td>
				</tr>
				<tr>
					<td></td>
					<td><a href="index.php" role="button">Kembali</a></td>
				</tr>

			</table>
	</left>
	</form>

	<script>
		function numbers(event) {
			var number = (event.which) ? event.which : event.keyCode
			if (number != 46 && number > 31 && (number < 48 || number > 57))
				return false;
			return true;
		}


		function huruf(hrf) {
			var huruf = (hrf.which) ? hrf.which : event.keyCode
			if ((huruf < 65 || huruf > 90) && (huruf < 97 || huruf > 122) && huruf > 32)
				return false;
			return true;
		}
	</script>

</body>

</html>