                         <!-- Page Connect  -->
<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>LOG IN</title>
</head>

                         <!-- Stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">

                          <!-- Header  -->
<h6 id="Header"><?php include '../header/header.php';?></h6>


<!-- Navbar Start  -->
<div class="sticky">
  <div class="topnav">
<a href="../View/home.php">HOME</a>
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

                 <!-- Javascript  -->
<script src="../js/loginValidation.js"></script>

                    <!-- Heading  -->
<h1>Login</h1>

                       <!-- Form Start -->
<form action="" method='post' onsubmit="return validateForm1()">

 <Label>UserName:</label><br><?php echo $usernameerror; ?> <h4 id="jsusernameerror"></h4>
  <input type="text" id="username" name="username" placeholder="Enter your username!"><br><br>

  <Label>Password:</label><br><?php echo $passworderror; ?> <h4 id="jspassworderror"></h4>
  <input type="password" id="password" name="password"placeholder="Enter your password!"  ><br><br>
                              <!-- Form End  -->


                               <!-- Button  -->
<input name="submit" type="submit" value="Login">
<input name="reset" type="reset" value="reset"><br>

</form>
<br>
</body>
                   <!-- Footer  -->
  <?php include '../footer/footer.php';?> 
</html>

