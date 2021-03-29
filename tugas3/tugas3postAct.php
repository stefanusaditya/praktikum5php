<!--deklarasi script php-->
<?php
	//script untuk mengambil nilai variabel pada form dan menampilkannya lagi
	echo "<center><h2>Selamat datang ".$_POST['nama'].", berikut biodata Anda"."</h2></center><br>";
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Tempat,tanggal lahir :".$_POST['ttl']."</center><br>";
	echo "<center>Alamat Rumah :".$_POST['alamat']."</center><br>";
	echo "<center>Hobi : ".$_POST['hobi']."</center><br>";
	echo "<center>Cita-cita :".$_POST['cita-cita']."</center><br>";
?>