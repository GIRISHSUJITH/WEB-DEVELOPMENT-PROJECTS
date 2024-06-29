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
    <label>ENTER YOUR NAME </label><br>
    <input type="text" name="g1"><br>
    <input type="submit" value="click me">
</form></center><br>
<h2><center>
<?php
$number=0;
$tot=0;
if($_POST)
{
  $x=$_POST["g1"];
  $n=strlen($x);
  $tot=0;
  for($i=0;$i<$n;$i++)
  {
    if($x[$i]=='a'||$x[$i]=='e'||$x[$i]=='i' ||$x[$i]=='q' ||$x[$i]=='j' ||$x[$i]=='y')
    {
      $tot=$tot+1;
    }
    elseif ($x[$i]=='b' ||$x[$i]=='k' ||$x[$i]=='r')
    {
      $tot=$tot+2;  
    }
    elseif ($x[$i]=='c' ||$x[$i]=='g' ||$x[$i]=='l' ||$x[$i]=='s' )
    {
      $tot=$tot+3;  
    }
    elseif ($x[$i]=='d' ||$x[$i]=='m' ||$x[$i]=='t')
    {
      $tot=$tot+4;  
    }
    elseif ($x[$i]=='e' ||$x[$i]=='h' ||$x[$i]=='n' ||$x[$i]=='x')
    {
      $tot=$tot+5;  
    }
    elseif ($x[$i]=='u' ||$x[$i]=='v' ||$x[$i]=='w')
    {
      $tot=$tot+6;  
    }
    elseif ($x[$i]=='z' ||$x[$i]=='o' )
    {
      $tot=$tot+7;  
    }
    elseif ($x[$i]=='p' ||$x[$i]=='f' )
    {
      $tot=$tot+8;  
    }
    
  }
if($tot>=10)
{
while($tot>0)
{
   $d=$tot%10;
   $number=$number+$d;
   $tot=$tot/10;
}
echo $number;
}
  else
{
    echo $tot;
}
    echo "<br>";
}
  else
{
    echo "WHAT DOES YOUR NAME MEANS? ";
}
if($tot==0 && $number<1) {
  echo "TRY";
}
elseif($tot>=1||$number<2)
{
  echo "Number 1 individuals exhibit traits of leadership, independence, originality, ambition, and determination.";
}
elseif($tot>=2||$number<3)
{
  echo "People with the numerology number 2 are known for their cooperation, diplomacy, balance, harmony, and partnership skills.";
}
elseif($tot>=3||$number<4)
{
  echo "Individuals influenced by number 3 tend to be creative, expressive, optimistic, sociable, and enthusiastic.";
}
elseif($tot>=4||$number<5)
{
  echo "Those associated with number 4 are characterized by stability, organization, practicality, reliability, and discipline.";
}
elseif($tot>=5||$number<6)
{
  echo "Number 5 personalities are marked by a sense of freedom, versatility, adventure, change, and resourcefulness.";
}
elseif($tot>=6||$number<7)
{
  echo "People with the numerology number 6 are responsible, nurturing, seek balance and harmony, and often engage in service-oriented activities.";
}
elseif($tot>=7||$number<8)
{
  echo "Number 7 individuals are introspective, analytical, spiritual, wise, and intuitive in their approach to life.";
}
elseif($tot>=8||$number<9)
{
  echo "Those influenced by number 8 are associated with abundance, success, power, achievement, and authority.";
}
elseif($tot>=9||$number<10)
{
  echo "Individuals with the numerology number 9 tend to be compassionate, humanitarian, selfless, idealistic, and forgiving.";
}
elseif($tot>=10||$number<11)
{
  echo "People with the numerology number 10 are characterized by leadership qualities, independence, innovation, determination, and creativity.";
}
?>
</center>
</body> 
</html>