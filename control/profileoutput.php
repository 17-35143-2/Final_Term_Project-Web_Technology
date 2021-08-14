<?php
session_start(); 

$cookie_name = "Profile";
$cookie_value = $_SESSION["username"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


if(empty($_SESSION["username"])) 
{
header("Location:../view/profile.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>ProfileOutput</title>
      <!-- Stylesheet  -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
        
        <!-- Header  -->
<h6 id="Header"><?php include '../header/header.php';?></h6>
</head>
<!-- Navbar Start  -->
<div class="sticky">
<div class="topnav">


<a href="../view/reg.php">REGISTRATION</a>
<a href="../view/login.php">LOG IN</a>
<a href="../view/profile.php">PROFILE</a>
<a href="../view/application.php">ONLINE RENTAL APPLICATION</a>
<a href="../view/search.php">SEARCH</a>
<a href="../view/add tenant.php">TENANT</a>
<a href="../control/logoutcheck.php">LOGOUT</a>
</div>
</div>

                    <!-- Navbar End  -->
<body>
                             <!-- Heading  -->
<h2>Profile Information</h2>

                       <!-- Show output  -->

<?php 
echo "<h2>Your Input:</h2>";

echo  $_SESSION["username"];
echo "<br>";

echo  $_SESSION["email"];
echo "<br>";

echo  $_SESSION["DOB"];
echo "<br>";

echo  $_SESSION["address"];
echo "<br>";

echo  $_SESSION["gender"];
echo "<br>";


?>

<?php

 

?>



</body>
                  <!-- Footer  -->
<?php include '../footer/footer.php';?> 
</html>
