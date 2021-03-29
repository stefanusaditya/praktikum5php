<!--deklarasi script php-->
<?php
	//logika selection
	if (empty($_POST['nama'])) {
		//jika tidak ada inputan maka menampilkan file kosong.php
		header("Location:kosong.php");
	} else {
		//jika ada inputan nama maka menampilkan nama yang diinput dengan method post
		echo "<center>Nama:".$_POST['nama']."</center><br>";
	}
	
?>