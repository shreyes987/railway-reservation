<?php
require 'connect.inc.php';
session_start();
$number=0;
if($_POST['name1']!=''){
	$query1="insert into after values('','".$_POST['srno1']."','".$_POST['name1']."','".$_POST['age1']."','".$_POST['gender1']."','".$_POST['berth1']."','".$_SESSION['user']."')";
	$run=mysqli_query($connected,$query1) or die(mysqli_error($connected) );
	$number++;
}

if($_POST['name2']!=''){
	$query1="insert into after values('','".$_POST['srno2']."','".$_POST['name2']."','".$_POST['age2']."','".$_POST['gender2']."','".$_POST['berth2']."','".$_SESSION['user']."')";
	$run=mysqli_query($connected,$query1) or die(mysqli_error($connected) );
	$number++;

}

if($_POST['name3']!=''){
	$query1="insert into after values('','".$_POST['srno3']."','".$_POST['name3']."','".$_POST['age3']."','".$_POST['gender3']."','".$_POST['berth3']."','".$_SESSION['user']."')";
	$run=mysqli_query($connected,$query1) or die(mysqli_error($connected) );
	$number++;

}
$query2="update timetable set ticketavailable=ticketavailable-".$number." where trainno=".$_GET['train']."";
$run2=mysqli_query($connected,$query2) or die(mysqli_error($connected));

$query="select * from after where username='".$_SESSION['user']."'";
$result=mysqli_query($connected,$query) or die("no");
$query8="select cost from timetable where '".$_GET['train']."'";
$result12=mysqli_query($connected,$query8) or die("non");

echo"<marquee direction=\"right\">
<b><color=\"cyan\">YOUR TICKET HAS BEEN BOOKED</color><b>
</marquee>";
echo"
<table border=1>
<tr>
<th>NAME</th>
<th>Age</th>
<th>gender</th>
<th>Berth perference</th>
<th>cost</th>
</tr>
";
$coll= mysqli_num_rows($result);
$tot=1;
$total=0;
$row1=mysqli_fetch_assoc($result12);
while($row=mysqli_fetch_assoc($result))
{
	
	if(($coll-$number)>0){
	if($tot>($coll-$number)){
		echo"
		<tr>
		<td>".$row['name']."</td>
		<td>".$row['age']."</td>
		<td>".$row['gender']."</td>
		<td>".$row['berth']."</td>
		<td>".$row1['cost']."</td>
		</tr>	";
		
		
	}

	}
		
	
	else{
		echo"
		<tr>
		<td>".$row['name']."</td>
		<td>".$row['age']."</td>
		<td>".$row['gender']."</td>
		<td>".$row['berth']."</td>

		</tr>
		";
	}
	$tot++;
}
if($number==1)
		{
		echo"
		<table border=1>
		<tr>
		<th>total cost</th>
		<td>".$row1['cost']."</td>
		</tr>
		";
		}
		if($number==2)
		{
		$total=$row1['cost'] + $row1['cost'];
		echo"
		<table border=1>
		<tr>
		<th>total cost</th>
		<td>".$total."</td>
		</tr>
		";
		}
		if($number==3)
		{
			$total=$row1['cost'] + $row1['cost'] + $row1['cost'];
		echo"
		<table border=1>
		<tr>
		<th>total cost</th>
		<td>".$total."</td>
		</tr>
		";
		}	
echo"<html>
<br><br><a href=\"table.php\">BOOK ANOTHER TICKET!</a>
</html>";
?>
<html>
<br><br><a href="log.php">logout</a>
</html>