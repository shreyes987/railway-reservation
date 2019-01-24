<?php
require 'connect.inc.php';
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$pass_hash=md5($password);
$sql="select * from users where username='".$username."'";

$result=mysqli_query($connected,$sql);
$count=mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
if($count==1)
{
		if ($row['username']==$username && ($row['password'])==$pass_hash){
			$_SESSION['user']=$username;
			header('Location: table.php');
		}
		else{
			header('Location: railwayres.html');
		
	}
}
else{
	header('Location: railwayres.html');
    }
?>