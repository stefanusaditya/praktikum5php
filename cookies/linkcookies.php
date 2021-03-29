<!--deklarasi script php-->
<?php
	//setting cookies
	setcookie("variable_cookies","ini adalah variabel cookies",time()+60);
	//menampilkan tulisan yang berupa link
	echo "<a href=cekcookies.php>cek cookies</a>";
?>