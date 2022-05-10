<?php
	define('DB_SERVER','mysql-avaurs.alwaysdata.net');
	define('DB_USERNAME','avaurs');
	define('DB_PASSWORD','mdpalwaysdataFDP');
	define('DB_NAME','avaurs_user');

	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if($link === false) {
		die("ERROR : could not connect. " . mysqli_connect_error());
	}
?>
