<html>
<head>
	<title>INDEXED ARRAY</title>
</head>
<body>
	<?php
	$PASS=0;
	$FAIL=0;
	$ABSENT=0;
	$x=array(85,25,60,75,99,48,92,35,10,0);
	for($i=0;$i<10;$i++)
	{
   		if($x[$i]>=50)
   	{
    	$PASS=$PASS+1;
   	}
   		if($x[$i]>=1 & $x[$i]<=49)
   	{
      	$FAIL=$FAIL+1;
   	}
   		if($x[$i]==0)
   	{
   		$ABSENT=$ABSENT+1;
   	}
  	}
	$TOTAL=$PASS+$FAIL+$ABSENT;
	$SUM=array_sum($x);
	$PASSPERCENTAGE=$PASS/$TOTAL*100;
	$FAILPERCENTAGE=$FAIL/$TOTAL*100;
	$ABSENTPERCENTAGE=$ABSENT/$TOTAL*100;
	echo "TOTAL NUMBER OF STUDENTS: $TOTAL";
	echo "<br>";
	echo "<br>";
	echo "TOTAL NUMBER OF STUDENTS PASS: $PASS";
	echo "<br>";
	echo "<br>";
	echo "TOTAL NUMBER OF STUDENTS FAIL: $FAIL";
	echo "<br>";
	echo "<br>";
	echo "TOTAL NUMBER OF STUDENTS ABSENT: $ABSENT";
	echo "<br>";
	echo "<br>";
	echo "CLASS PASS PERCENTAGE:$PASSPERCENTAGE %" ;
	echo "<br>";
	echo "<br>";
	echo "CLASS FAIL PERCENTAGE:$FAILPERCENTAGE %";
	echo "<br>";
	echo "<br>";
	echo "CLASS ABSENT PERCENTAGE:$ABSENTPERCENTAGE %";
	?>
</body>
</html>