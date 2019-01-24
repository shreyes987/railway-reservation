<?php
require 'connect.inc.php';


$username= $_POST['username'];
$password= $_POST['password'];
$pass_hash=md5($password);
$repass= $_POST['repass'];
$email=$_POST['e'];
$date=$_POST['date'];
$phonenumber=$_POST['ph'];
			$query="INSERT INTO users VALUES ('','".$username."','".$pass_hash."','".$email."','".$date."',".$phonenumber.")";
			$query_run= mysqli_query($connected,$query);
			echo $query;
			
			if($query_run){
				header('Location: railwayres.html');
				
				
			}
			else{
				
				echo mysql_error();
			}

	echo'all fields are required.';

?>
