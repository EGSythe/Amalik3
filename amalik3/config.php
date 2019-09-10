<?php

$databaseHost = 'localhost';
$databaseName = '4015';
$databaseUsername = 'root';
$databasePassword = '123456';

$mysqli = mysqli_connect($databaseHost, $databaseUsername,$databasePassword, $databaseName );

if (mysqli_connect_error()) {
  echo "gagal sambungkan pangkalan data mysql:".mysqli_connect_error();
}
else {
  echo "berjaya";
}

?>


