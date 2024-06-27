<?php

$conn = mysqli_connect(
	'localhost',
	'root',
	'root',
	'crud-php-mysql-base'
);

if (isset($conn)) {
	echo "DB is connect";
}

 ?>

