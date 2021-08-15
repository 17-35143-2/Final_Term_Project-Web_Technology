
<!DOCTYPE html>
<html>
<head>
                    <!-- Stylesheet  -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
                            <!-- Header  -->
<h6 id="Header"><?php include '../header/header.php';?></h6>
<br><br>
</head>

<!-- Navbar start  -->
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
<!-- Nvbar End  -->



<body>
<h2>Successfully Registered Information</h2>




<?php 
// echo "<h2>Your Input:</h2>";

// echo  $_SESSION["Firstname"];
// echo "<br>";
// echo  $_SESSION["Lastname"];
// echo "<br>";

// echo  $_SESSION["email"];
// echo "<br>";

// echo  $_SESSION["City"];
// echo "<br>";


// echo  $_SESSION["Region"];
// echo "<br>";

// echo  $_SESSION["date"];
// echo "<br>";

// echo  $_SESSION["signature"];
// echo "<br>";





include('dbapp.php');

$connection = new dbapp();
$conn=$connection->OpenCon();
$userQuery=$connection->showall($conn,"application"); 
 

echo "<table border='1'>
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th> 
<th>email</th>
<th>City</th>
<th>Region</th>
<th>date</th>
<th>signature</th>

</tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['Firstname'] . "</td>";
    echo "<td>" . $row['Lastname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['City'] . "</td>";
    echo "<td>" . $row['Region'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['signature'] . "</td>";
   
    
    echo "</tr>";
    }
    echo "</table>"; //$conn->close(); //mysqli_close($conn);
    } 
?>  
<br><br>


</body>
</html>
