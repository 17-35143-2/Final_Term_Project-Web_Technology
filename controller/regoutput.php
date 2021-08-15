<?php
session_start(); 

if(empty($_SESSION["username"])) 
{
header("Location:../view/reg.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Regoutput</title>
                        <!-- Stylesheet  -->
<link rel="stylesheet" type="text/css" href="../view/css/style.css">
                             <!-- Header  -->
<h6 id="Header"><?php include '../view/header/header.php';?></h6>
<br><br>
</head>
                        <!-- Navbar Start  -->
<div class="sticky">
  <div class="topnav">
<a href="../View/home.php">HOME</a>

<a href="../view/login.php">LOG IN</a>
<a href="../view/profile.php">PROFILE</a>
<a href="../view/application.php">ONLINE RENTAL APPLICATION</a>
<a href="../view/search.php">SEARCH</a>
<a href="../view/add tenant.php">TENANT</a>
<a href="../controller/logoutcheck.php">LOGOUT</a>

  </div>
</div>
                             <!-- Navbar End  -->
<body>
<h2>Successfully Registered Information</h2>
                         <!-- Show output  -->
<?php 
echo "<h2>Your Input:</h2>";

echo  $_SESSION["fname"];
echo "<br>";
echo  $_SESSION["lname"];
echo "<br>";

echo  $_SESSION["email"];
echo "<br>";

echo  $_SESSION["username"];
echo "<br>";


echo  $_SESSION["DOB"];
echo "<br>";

echo  $_SESSION["address"];
echo "<br>";

echo  $_SESSION["gender"];
echo "<br>";
?>


</body>
 <!-- Footer  -->
 <?php include '../view/footer/footer.php';?> 
</html>
