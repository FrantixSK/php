<?php
 include('login_kod.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <title>7topics - Login Demo</title>
</head>
<body>
<header>
 <nav>
  <ul>
   <li><a href="https://7topics.com">7topics</a></li>
   <li><a href="https://7topics.com/creating-user-profile-page-using-php-and-mysql.html">Tutorial</a></li>
  </ul>
 </nav>
</header>
<div id="center">
<div id="center-set"> -written by Rahul Ranjan
<h1 align='center'>Welcome <?php echo $username; ?>,</h1>
You are now logged in. you can logout by clicking on signout link given below.
<div id="contentbox">
<?php
$sql="SELECT * FROM users where username=$username";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
</table>
<div id="reg-bottom" class="btmrg">Copyright &copy; 2015 7topics.com</div>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>
<div id="footer"><p> Copyright &copy; 2014-2015 7topics.com </p></div>
</body>
</html>