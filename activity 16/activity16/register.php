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
</style>
<script language="JAVASCRIPT">
    function j1()
    {
      var username=f1.t1.value;
      var password=f1.p1.value;
      var confirmpassword=f1.c1.value;
      var date=f1.d1.value;
      var gender=f1.g1.value;
      document.write(username)
      document.write(password)
      document.write(confirmpassword)
      document.write(date)
      document.write(gender)
    }
    function w1(){
      var username=f1.t1.value;
      if (username=="") { alert("Enter The Username")}
    }
    function w2(){
      var password=f1.p1.value;
      if (password=="") { alert("Enter The Password")}
    }
    function w3(){
      var confirmpassword=f1.c1.value;
      if (confirmpassword=="") { 
        alert("Enter The confirmPassword")
    }
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
<br>
<div>
<center>
<form name="f1" method="post" action="database.php">
<table>
  <tr>
    <td><h2>USERNAME:</h2></td>
    <td><input type="text" name="t1" placeholder="Enter the Username"></td>
  </tr>
  <tr>
    <td><h2>PASSWORD:</h2></td>
    <td><input type="password" name="p1" placeholder="Password" onfocusin="w1()"></td>
  </tr>
  <tr>
    <td><h2>CONFIRM PASSWORD:</h2></td>
    <td><input type="password" name="c1" placeholder="Confirm Password" onfocusin="w2()"></td>
  </tr>
  <tr>
    <td><h2>DOB:</h2></td>
    <td><input type="date" name="d1" onfocusin="w3()"></td>
  </tr>
  <tr>
    <td><h2>GENDER:</h2></td>
    <td><input type="radio" name="g1" value="male"><strong>Male</strong>
        <input type="radio" name="g1" value="female"><strong>Female</strong>
        <input type="radio" name="g1" value="others" ><strong>Others</strong>
    </td>
  </tr>   
</table>
    <input name="o5" type="button" value="SUBMIT" onclick="j1()">
    <input name="o6" type="button" value="RESET" onclick="window.location.reload()">
</form>
</center>
</div>
</body>
</html>

