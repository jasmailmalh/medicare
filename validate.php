<?php 

	$string = "We all HERE to learn php and the center name is CLARA and address is 782 bharat nagar IS chowck 141007";

	$pattern = "/W[a-z]/i";
	$result = preg_match_all($pattern, $string, $array);
	if($result) {
		echo "matched";
	} else {
		echo "not matched";
	}

	echo "<pre>";
	print_r($array);
	echo "</pre>";
?>