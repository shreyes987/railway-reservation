<?php

require 'connect.inc.php';
$source=$_POST['source'];
$destination=$_POST['destination']; 
$type=$_POST['type'];

$query="Select * from timetable where source='".$source."' AND destination='".$destination."' AND type='".$type."'";
$result=mysqli_query($connected,$query) or die(mysqli_error($connected));
$row=mysqli_fetch_assoc($result);

	
	
		echo"<html>
		<table border=\"2\" style=\"width:100%\">
		<tr>
		<th>Train no</th>
		<th>Train name</th>
		<th>Type</th>
		<th>Source</th>
		<th>Destination</th>
		<th>tickets available</th>
		<th>dep</th>
		<th>arrival</th>
		<th>book ticket</th>
		</tr>";
		
		
		
		
	
		while($row=mysqli_fetch_assoc($result))
		{
			
			if($row['source']==$source && $row['destination']==$destination && $row['type']==$type)
			{
				
				echo"<tr><td>".$row['trainno']."</td>";
				echo"<td>".$row['trainname']."</td>";
				echo"<td>".$row['type']."</td>";
				echo"<td>".$row['source']."</td>";
				echo"<td>".$row['destination']."</td>";
				echo"<td>".$row['ticketavailable']."</td>";
				echo"<td>".$row['dep']."</td>";
				echo"<td>".$row['arrival']."</td>";
				echo"<td><a href='after.php?train=".$row['trainno']."'>Book now</a></td></tr>";
			}
			echo"</html>";
		}
		
		
echo"<a href='log.php'>logout</a>";
?>