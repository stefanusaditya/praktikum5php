<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--membuat form yang menggunakan method POST-->
	<form method="POST" action="hasilkirim.php">
		<!--membuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--membuat cell untuk inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<!--membuat tombol untuk mengeksekusi file postAct.php-->
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>