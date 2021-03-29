<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman PHP dengan Array</title>
</head>
<body>
	<!--deklarasi script PHP-->
	<?php
		//deklarasi array
		$nama[]="Stefanus";
		$nama[]="Aditya";
		$nama[]="Ferary";
		//menampilkan gabungan isi dari array
		echo $nama[1].$nama[2].$nama[0];
		echo "<br>";
		//menghitung jumlah elemen array
		$jum_array=count($nama);
		echo "jumlah elemen array = ".$jum_array;
	?>
</body>
</html>