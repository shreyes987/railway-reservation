
<html>
<script>
function ver()
{
	if(document.f.source.value==document.f.destination.value)
	{
	alert('source and destination cannot be same');
	return false;
	onfocus='document.f.source.value';
	}
}
</script>
<br> PLAN A TICKET <br>
<form name='f' onsubmit='return ver()' method='POST' action='tab.php'>
<br>SELECT Source<br>
<select name="source">
<option value="Mumbai">Mumbai</option>
<option value="Pune">Pune</option>
<option value="Ahmedabad">Ahmedabad</option>
</select>

<br>SELECT Destination<br>
<select name="destination">
<option value="Mumbai">Mumbai</option>
<option value="Pune">Pune</option>
<option value="Ahmedabad">Ahmedabad</option>
</select>


<br>SELECT Type<br>
<select name="type">
<option value="EXP">EXP</option>
<option value="SF">SF</option>
</select>
<br>

<input type="submit" name="submit">







</form>
<?php
require 'connect.inc.php';
$query="select * from timetable";
$result=mysqli_query($connected,$query) or die('hey');

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
		$row=1;
	
		while($row=mysqli_fetch_assoc($result))
		{
			
				echo"<tr><td>".$row['trainno']."</td>";
				echo"<td>".$row['type']."</td>";
				echo"<td>".$row['trainname']."</td>";
				echo"<td>".$row['source']."</td>";
				echo"<td>".$row['destination']."</td>";
				echo"<td>".$row['ticketavailable']."</td>";
				echo"<td>".$row['dep']."</td>";
				echo"<td>".$row['arrival']."</td>";
				echo"<td><a href='after.php?train=".$row['trainno']."'>Book now</a></td></tr>";
		}
?>

<a href='log.php'>logout</a>
<a href='history1.php'>SHOW HISTORY</a>
</body>
</html>