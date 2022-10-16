<?php
	$conn =  new mysqli('localhost', 'id18311075_roots', 'TZ5>OF/T(ZQ&}l+j', 'id18311075_apsystem') ;

	if ($conn->connect_error) {
		print('ERRORR');
	    die("Connection failed: " . $conn->connect_error);
	}

	#$hash = password_hash('admin', 1);
	#print($hash);
	
?>