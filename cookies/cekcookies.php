<!--deklarasi script php-->
<?php
	//logika selection
	if (isset($variable_cookies)) {
		//menampilkan variabel cookies dan nilainya jika sudah diset
		echo 'Variable cookiesnya "$variable_cookies" nilainy adalah'.$variable_cookies;
	} else {
		//menampilkan kalimat di bawah jika variabel cookies dan nilainya belum diset
		echo "Variabel cookies belum diterapkan";
	}
	
?>