<!DOCTYPE html>
<html>
<head>
	<title>Identitas</title>
</head>
<body>
	<!--membuat form yang menggunakan method POST-->
	<form method="POST" action="tugas3postAct.php">
		<h2 align="center">Biodata Diri</h1>
		<!--membuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--membuat cell untuk inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Tempat, Tanggal Lahir</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Alamat Rumah</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">Hobi</td>
				<td><input type="text" name="hobi"></td>
			</tr>
			<tr>
				<td width="130">Cita-cita</td>
				<td><input type="text" name="cita-cita"></td>
			</tr>
		</table>
		<!--membuat tombol untuk mengeksekusi file postAct.php-->
		<p align="center"><input type="submit" name="btnLogin" value="Submit"></p>
	</form>
</body>
</html>