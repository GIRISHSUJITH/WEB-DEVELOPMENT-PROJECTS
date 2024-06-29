<html>
<head>
<title>ACE</title>
<style type="text/css">
*{
  margin: 0px;
  padding: 0px;
  box-sizing:border-box ;
}
nav{
  width: 100%;
  background-color: black;
  height: 75px;
  line-height: 75px;
  padding: 0px 120px;
}
nav h1{
  font-size: 32px;
  font-family: sans-serif;
  color: white;
  text-transform: uppercase;
  float: left;
}
nav ul{
  float: right;
}
nav ul li{
  float: left;
  list-style: none;
  position: relative;
}
nav ul li a{
  text-decoration: none;
  font-family: sans-serif;
  color: #fff;
  font-size: 17px;
  display: block;
  padding: 0px 16px;
}
nav ul li ul{
  position: absolute;
  display: none;
  background-color: #2a375e;
  border-radius:0px 0px 5px 5px;
}
nav ul li ul li{
  line-height: 2;
  width: 190px;
  border-radius: 5px;
  padding: 6px;
}
nav ul li ul li a{
  padding: 10px 16px;
}
nav ul li ul li a:hover{
  background-color: #46527a;
}
nav ul li a:hover{
  background-color: #46527a;
}
nav ul li:hover ul{
  display: block;
}
h2{
  font-family: sans-serif;
}
strong{
  font-size: 20px;
}
img{
  border-radius: 15%;
  box-shadow: 10px 10px 5px lightgray;
}
</style>
<script language="JAVASCRIPT">
    function g1() {
      var a=document.getElementById("a1");
      a.style.height="400";
      a.style.width="400";
    }
    function d1() {
      var a=document.getElementById("a1");
      a.style.height="350";
      a.style.width="300";
      document.body.style.background="orange";
    }
    function g2() {
      var b=document.getElementById("a2");
      b.style.height="400";
      b.style.width="400";
    }
    function d2() {
      var b=document.getElementById("a2");
      b.style.height="350";
      b.style.width="300";
      document.body.style.background="blue";
    }
    function g3() {
      var c=document.getElementById("a3");
      c.style.height="400";
      c.style.width="400";
    }
    function d3() {
      var c=document.getElementById("a3");
      c.style.height="350";
      c.style.width="300";
      document.body.style.background="yellow";
    }
</script>
</head>
<body>
<nav style="background-color: white;">
<div>
  <ul style="float:left;">
    <li><img src="s1.jpg" height="70"></li>
  </ul>
  <ul>
    <li><center><h1 style="color: black;">ADHIYAMAAN COLLEGE OF ENGINEERING (AUTONOMOUS), HOSUR</h1></center></li>
  </ul>
</div>
</nav>
<br><br>
<nav>
<div>
<ul style="float:left;">
    <li><a href="home.php">HOME</a></li>
    <li><a href="aboutus.php">ABOUT US</a></li>
    <li><a href="contactus.php">CONTACT US</a></li>
    <li><a>DEPARTMENT</a>
  <ul>
    <li><a href="ece.php">ECE</a></li>
    <li><a href="cse.php">CSE</a></li>
    <li><a href="eee.php">EEE</a></li>
    <li><a href="it.php">IT</a></li>
  </ul>
  </li>
</ul>
<ul>
  <li style="float:right;"><a href="register.php">REGISTER</a></li>
</ul>
</div>
</nav>
<center>
<br>
<div>
  <table>
    <tr>
      <td><h1 style="text-align: center;">CONTACT ADDRESS</h1></td>
      <td><h1 style="text-align: center;">EMAIL US</h1></td>
      <td><h1 style="text-align: center;">CALL US</h1></td>
    </tr>
    <tr>
      <td><img src="loc.png" id="a1" height="350px" width="300px" onclick="d1()" ondblclick="g1()"></td>
      <td><img src="msg.png" id="a2" height="350px" width="300px" onclick="d2()" ondblclick="g2()"></td>
      <td><img src="call.png" id="a3" height="350px" width="300px" onclick="d3()" ondblclick="g3()"></td>
    </tr>
    <tr>
      <td style="text-align: center;"><strong>Adhiyamaan College of Engineering<br>
          Dr.M.G.R.Nagar, Hosur</strong></td>
      <td style="text-align: center;"><strong>Website Address<br>
          www.adhiyamaan.ac.in</strong></td>
      <td style="text-align: center;"><strong>+91-XXXXXXXXXX</strong></td>
    </tr>
  </table>
</div>
</center>
</body>
</html>

