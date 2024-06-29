<html>
<head>
	<title>MULTIPLE DIMENSION ARRAY</title>
</head>
<body>
<?php
	$x=array(
		array("S.No","SUBJECTCODE","SUBJECTNAME","TOTAL","RESULT"),
		array(1,"518ECT01","DIGITAL SIGNAL PROCESSING","A+","PASS"),
		array(2,"518ECT02","MICROPREOCESSORS AND MICROCONTROLLERS","A+","PASS"),
		array(3,"518ECT03","COMMUNICATION THEORY","A+","PASS"),
		array(4,"518ECT04","COMPUTER COMMUNICATION AND NETWORKS","A","PASS"),
		array(5,"518ECT05","TRANSMISSION LINES AND WAVEGUIDES","O","PASS"),
		array(6,"518MEO01","ROBOTICS PROCESS AND INDUSTRIAL AUTOMATION","O","PASS"),
		array(7,"518ECP07","DIGITAL SIGNAL PROCESSING LABORATORY","A+","PASS"),
		array(8,"518ECP08","MICROPREOCESSORS AND MICROCONTROLLERS LABORATORY","A+","PASS"),
		array(9,"518ECP09","COMPUTER NETWORKS LABORATORY","A+","PASS"),
		array(10,"818ECE08","SATELLITE COMMUNICATION","A+","PASS")

	);
	{
	echo $x[0][0]; echo "\t"; echo $x[0][1]; echo "\t"; echo $x[0][2]; echo "\t"; echo $x[0][3]; echo "\t"; echo $x[0][4]; echo "<br>"; 
	echo $x[1][0]; echo "\t"; echo $x[1][1]; echo "\t"; echo $x[1][2]; echo "\t"; echo $x[1][3]; echo "\t"; echo $x[1][4]; echo "<br>";
	echo $x[2][0]; echo "\t"; echo $x[2][1]; echo "\t"; echo $x[2][2]; echo "\t"; echo $x[2][3]; echo "\t"; echo $x[2][4]; echo "<br>";
	echo $x[3][0]; echo "\t"; echo $x[3][1]; echo "\t"; echo $x[3][2]; echo "\t"; echo $x[3][3]; echo "\t"; echo $x[3][4]; echo "<br>";
	echo $x[4][0]; echo "\t"; echo $x[4][1]; echo "\t"; echo $x[4][2]; echo "\t"; echo $x[4][3]; echo "\t"; echo $x[4][4]; echo "<br>";
	echo $x[5][0]; echo "\t"; echo $x[5][1]; echo "\t"; echo $x[5][2]; echo "\t"; echo $x[5][3]; echo "\t"; echo $x[5][4]; echo "<br>";
	echo $x[6][0]; echo "\t"; echo $x[6][1]; echo "\t"; echo $x[6][2]; echo "\t"; echo $x[6][3]; echo "\t"; echo $x[6][4]; echo "<br>";
	echo $x[7][0]; echo "\t"; echo $x[7][1]; echo "\t"; echo $x[7][2]; echo "\t"; echo $x[7][3]; echo "\t"; echo $x[7][4]; echo "<br>";
	echo $x[8][0]; echo "\t"; echo $x[8][1]; echo "\t"; echo $x[8][2]; echo "\t"; echo $x[8][3]; echo "\t"; echo $x[8][4]; echo "<br>";
	echo $x[9][0]; echo "\t"; echo $x[9][1]; echo "\t"; echo $x[9][2]; echo "\t"; echo $x[9][3]; echo "\t"; echo $x[9][4]; echo "<br>";
	echo $x[10][0];echo "\t"; echo $x[10][1]; echo "\t"; echo $x[10][2]; echo "\t"; echo $x[10][3]; echo "\t"; echo $x[10][4]; echo "<br>";
	}
?>
</body>
</html>