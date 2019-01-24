<?php
require 'connect.inc.php';
session_start();
$query="select * from after where username='".$_SESSION['user']."'";
$result=mysqli_query($connected,$query) or die("no");

echo"
	<table border=1>
	<tr>
	<th>passanger no</th>
	<th>name</th>
	<th>age</th>
	<th>gender</th>
	<th>berth</th>
	</tr>

";
$count=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result))
{
	IF($count==0)echo"YOU ARE NEW USER";
	Else
	echo"
	<tr>
	<td>".$row['passno']."</td>
	<td>".$row['name']."</td>
	<td>".$row['age']."</td>
	<td>".$row['gender']."</td>
	<td>".$row['berth']."</td>
	</tr>";
	
}
echo"<a href='table.php'>GO BACK</a>";
echo"<a href='log.php'>LOGOUT</a>";
?>