<html>
Pasenger details
<table style="width:100%" border="1">
<tr>
<th>pNo</th>
<th>NAME</th>
<th>Age</th>
<th>gender</th>
<th>Class</th>
<th>Berth perference</th>
<th>senior citizen</th>
</tr>
<script>
function verf()
{
	var n=document.f1.age1.value;
	
	if(document.f1.check1.checked==true && document.f1.age1.value<=60)
	{
	alert("does not fit in senior citizen ");
	onfocus="document.f1.age.value";
	return false;
	}
	if(document.f1.check2.checked==true && document.f1.age2.value<=60)
	{
	
	alert("does not fit in senior citizen ");
	onfocus="document.f1.age.value";
	return false;
	
	}
	if(document.f1.check3.checked==true && document.f1.age3.value<=60){
	
	alert("does not fit in senior citizen ");
	onfocus="document.f1.age.value";
	return false;
	}
}

</script>
<!--

-->
<form name="f1" method="POST" onsubmit="return verf()" action="booked.php?train=<?php echo $_GET['train']?>">
<tr>
<th><input type="number" name="srno1" required></th>
<th><input type="text" name="name1" required></th>
<th><input type="number" name="age1" required></th>
<th>    
<select name="gender1">
<option value="male">Male</option>
<option value="Female">Female</option>
</select>
</th>
<th>
<select name="class1">
<option value="2a">2A</option>
<option value="3a">3A</option>
<option value="sl">SL</option>
</select>
</th>
<th>
<select name="berth1">
<option value="lower">Lower</option>
<option value="middle">Middle</option>
<option value="upper">Upper</option>
<option value="sideupper">Side Upper</option>
<option value="sidelower">Side Lower</option>
</select>
</th>

<th>
<input type="checkbox" id="check1" name="check1">
</th>
</tr>





<tr>
<th><input type="number" name="srno2"></th>
<th><input type="text" name="name2"></th>
<th><input type="number" name="age2"></th>
<th>    
<select name="gender2">
<option value="male">Male</option>
<option value="Female">Female</option>
</select>
</th>
<th>
<select name="class2">
<option value="2a">2A</option>
<option value="3a">3A</option>
<option value="sl">SL</option>
</select>
</th>
<th>
<select name="berth2">
<option value="lower">Lower</option>
<option value="middle">Middle</option>
<option value="upper">Upper</option>
<option value="sideupper">Side Upper</option>
<option value="sidelower">Side Lower</option>
</select>
</th>

<th>
<input type="checkbox" name="check2">
</th>
</tr>



<tr>
<th><input type="number" name="srno3"></th>
<th><input type="text" name="name3"></th>
<th><input type="number" name="age3"></th>
<th>    
<select name="gender3">
<option value="male">Male</option>
<option value="Female">Female</option>
</select>
</th>
<th>
<select name="class3">
<option value="2a">2A</option>
<option value="3a">3A</option>
<option value="sl">SL</option>
</select>
</th>
<th>
<select name="berth3">
<option value="lower">Lower</option>
<option value="middle">Middle</option>
<option value="upper">Upper</option>
<option value="sideupper">Side Upper</option>
<option value="sidelower">Side Lower</option>
</select>
</th>

<th>
<input type="checkbox" name="check3">
</th>
</tr>







</table>
<input type="submit" name="submit">
</form>
<a href="log.php">logout</a>
</html>