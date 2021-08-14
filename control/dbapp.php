<?php
class dbapp{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "Rental_Property_Management";
$conn = new mysqli($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}
function insertUser($conn,$id,$Firstname,$Lastname, $email, $City,$Region, $date, $signature  ){
    $stmt=$conn->preapare("insert into application(id,Firstname,Lastname, email, City, Region, date, signature ) values(?,?,?,?,?,?,?,?)") or die(mysqli_error($conn));
    $stmt->bind_param("isssssss",$id,$Firstname,$Lastname, $email, $City, $Region, $date, $signature) or die(mysqli_error($conn));
    $stmt->execute();
    //echo "<h3>Created Successful!</h3>";
    $stmt->close();}

function showall($conn,$table) {
    $result = $conn->query("SELECT * FROM  $table ");
    return $result;
    echo "<h3>Application information showed.</h3>";} 

     
function GetUserByUname($conn,$table, $user)
 {
$result = $conn->query("SELECT * FROM  $table WHERE id='$user'");
 return $result;
 }



 function FetchCheckUser($conn,$table)
 {
 $result = $conn->query("SELECT * FROM ". $table);
 return $result;
 }

 

 
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>