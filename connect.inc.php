<?php
$mysql_host='localhost';
$mysql_username='root';
$mysql_password='';

$mysql_database='a_database';
$connected = mysqli_connect(!$mysql_host,$mysql_username,$mysql_password,$mysql_database) or die("Error");

?>