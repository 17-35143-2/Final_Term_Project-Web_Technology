<?php
class db{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "Rental_Property_Management";
$conn = new mysqli($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}

function insertUser($conn,$fname,$lname, $email, $username,$DOB, $password, $cpassword, $address,  $gender){
    $stmt=$conn->prepare("insert into registration(fname,lname, email, username, DOB, password, cpassword,  address, gender ) values(?,?,?,?,?,?,?,?,?)") or die(mysqli_error($conn));
    $stmt->bind_param("sssssssss",$fname,$lname, $email, $username, $DOB, $password, $cpassword,   $address,  $gender) or die(mysqli_error($conn));
    $stmt->execute();
    //echo "<h3>Created Successful!</h3>";
    $stmt->close();}


                        // Table Show 
function showall($conn,$table) {
    $result = $conn->query("SELECT * FROM  $table ");
    return $result;
    echo "<h3>Registration information showed.</h3>";} 

                         //  Search 
function GetUserByUname($conn,$table, $user)
 {
$result = $conn->query("SELECT * FROM  $table WHERE id='$user'");
 return $result;
 }
                                 // Check 

 function InputCheckUser($conn,$table,$fname)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $fname."'");
 return $result;
 }
                                     // Fetch 
 function FetchCheckUser($conn,$table)
 {
 $result = $conn->query("SELECT * FROM ". $table);
 return $result;
 }

                            //    Update 
 function UpdateUser($conn,$table,$id, $username,$email,$DOB,$password,$address,$gender)
 {
     $sql = "update registration SET  username='$username',email='$email',DOB='$DOB',password='$password',address='$address',gender='$gender' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record Updated Successfully!";
    } else {
        $result= "Error Updating Record!" ;
    }
    return $result;
 }


 
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>