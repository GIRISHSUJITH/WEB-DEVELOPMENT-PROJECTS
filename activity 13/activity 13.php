<html>
<head><title>NUMEROLOGY</title>
<style>
*{
	margin: 0px;
	padding: 0px;
	box-sizing:border-box ;
	font-family:aerial;
}
nav {
	background-color: black;
	color: white;
}
#marquee{
	background-color: white;
	color: black;
	font-size: 30px;
}
body{
	background-color: rgb(240,240,240);
}
h1{
	letter-spacing: 1px;
	font-size: 100px;
	text-align: center;
}
form{
	
	font-size: 50px;
}
input{
	font-size: 40px;
}
button{
	font-size: 40px;
}
label{
	color: black;
	text-shadow: ;
}
</style>
</head>
<body>
	<nav><h1>NUMEROLOGY</h1></nav>
	<nav id="marquee"><marquee><strong>NUMEROLOGY</strong>: <strong>SUN</strong>(THE PRIMAL FORCE) <strong>MOON</strong>(THE ALL-KNOWING) <strong>JUPITER</strong>(THE CREATIVITY CHILD) <strong>RAHU</strong>(THE SALT OF THE EARTH) <strong>MERCURY</strong>(DYNAMIC FORCE) <strong>VENUS</strong>(THE CARETAKER) <strong>KETU</strong>(THE PHILOSOPHER) <strong>SATURN</strong>(BALANCE & POWER) <strong>MARS</strong>(GLOBAL AWARNESS)</strong></marquee></nav>
	<hr>
	<center><form name="f1" method="post" action="activity 13.php">
	<label>ENTER YOUR DATE OF BIRTH</label><br>
	<input type="DATE" name="date">
	<input type="submit" value="click me">
</form></center><br>
<h2><center>
<?php
$total=0;
$number=0;
if($_POST)
{
   $date=$_POST['date'];
   $numerology="$date";
   $numerology=str_replace("-", "", $numerology);
   
  while($numerology>0)
{
   $calculate=$numerology%10;
   $total=$total+$calculate;
   $numerology=$numerology/10;
} 
  if($total>=10)
{
  while($total>0)
{
   $d=$total%10;
   $number=$number+$d;
   $total=$total/10;
}
   echo $number;
}
  else
{
    echo $total;
}
    echo "<br>";
}
  else
{
    echo "WHAT DOES YOUR NUMBER MEANS?";
}
{
	echo"<br>";
}
if($total==0 && $number<1) {
	echo "TRY";
}
elseif($total>=1||$number<2)
{
	echo "Number 1 individuals exhibit traits of leadership, independence, originality, ambition, and determination.";
}
elseif($total>=2||$number<3)
{
	echo "People with the numerology number 2 are known for their cooperation, diplomacy, balance, harmony, and partnership skills.";
}
elseif($total>=3||$number<4)
{
	echo "Individuals influenced by number 3 tend to be creative, expressive, optimistic, sociable, and enthusiastic.";
}
elseif($total>=4||$number<5)
{
	echo "Those associated with number 4 are characterized by stability, organization, practicality, reliability, and discipline.";
}
elseif($total>=5||$number<6)
{
	echo "Number 5 personalities are marked by a sense of freedom, versatility, adventure, change, and resourcefulness.";
}
elseif($total>=6||$number<7)
{
	echo "People with the numerology number 6 are responsible, nurturing, seek balance and harmony, and often engage in service-oriented activities.";
}
elseif($total>=7||$number<8)
{
	echo "Number 7 individuals are introspective, analytical, spiritual, wise, and intuitive in their approach to life.";
}
elseif($total>=8||$number<9)
{
	echo "Those influenced by number 8 are associated with abundance, success, power, achievement, and authority.";
}
elseif($total>=9||$number<10)
{
	echo "Individuals with the numerology number 9 tend to be compassionate, humanitarian, selfless, idealistic, and forgiving.";
}
elseif($total>=10||$number<11)
{
	echo "People with the numerology number 10 are characterized by leadership qualities, independence, innovation, determination, and creativity.";
}
?> 
</center><h2>
</body>
</html>
