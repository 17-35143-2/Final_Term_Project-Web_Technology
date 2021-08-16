
<!DOCTYPE html>
<html>
<head> <title> Accept Or Reject </title> 
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
<a href="../view/update.php">UPDATE PROFILE</a>
<a href="../view/search.php">SEARCH</a>
<a href="../view/application.php">ONLINE RENTAL APPLICATION</a>
<a href="../view/reg.php">REGISTRATION</a>
<a href="../view/login.php">LOG IN</a>
<a href="../view/add tenant.php">TENANT</a>
<a href="../controller/logoutcheck.php">LOGOUT</a>
</div>
</div>
        <!-- Navbar End  -->
<body>
<div class="top"></div>
<div class="agent">
<form action="  " method="post">
<table > 
     
     <tr >
     <td>Accept</td>
      <td>  <a href="http://localhost/Mycode/MVC/view/accept.php"target="blank"><b>Accept</b></a> </td>
    </tr>
       <tr>
       <td> Reject </td>
       <td> <a href="http://localhost/Mycode/MVC/view/reject.php"target="blank"><b>Reject</b></a>  </td>
    </tr>
    
    
</table>

</form>


</div>
Go Back To   <a href="../controller/appoutput.php">Registerd Information</a><br>
</body>
<!-- Footer  -->
<?php include '../view/footer/footer.php';?>
</html>