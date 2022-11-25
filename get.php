<?php

	$number = $_GET['number'];

	if ($number === "") {
		echo "Bir sayi giriniz!!!";
	} else {
		if ($number %3 == 0) {
			echo "Girdiginiz sayi 3'e bolunebiliyor.";
		} else {
			$afterNum = $number;
	        $afterNum++;

	        while ($afterNum % 3 !== 0) {
	        	$afterNum++;
	        }

	        echo "${number} sayisi 3 ile bolunmuyor. 3 ile bolunebilecek ilk sayi: ${afterNum}";
		}
	}

?>