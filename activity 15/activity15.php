<html>
<head>
	<title>DATABASE LAYER</title>
</head>
<body>
	<center><form name="g1" method="post" action="connect.php">
		<label><strong>USERNAME:</strong></label><br>
		<input type="text" name="username" placeholder="username"><br><br>
		<label><strong>PASSWORD:</strong></label><br>
		<input type="password" name="password" placeholder="password"><br><br>
		<label><strong>DOB:</strong></label><br>
		<input type="date" name="date" placeholder="dob"><br><br>
		<label><strong>GENDER:</strong></label><br>
		<label><input type="radio"  name="gender" value="m">MALE</label>
		<label><input type="radio"  name="gender" value="f" >FEMALE</label>
		<label><input type="radio"  name="gender" value="o" >OTHERS</label><br><br>
		<label><strong>COURSE:</strong></label><br>
		<select name="course"><option>ECE</option><option>CSE</option><option>IT</option><option>BME</option><option>MECH</option><option>CIVIL</option><option>AERO</option></select><br><br>
		<input type="submit" value="submit">
</form></center>
</body>
</html>