<!--?php
session_start();
error_reporting(0);
include("connection.php");
if(isset($_POST['submit']))

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email  = $_POST['email'];
$phone = $_POST['phone'];
$psw1 = $_POST['psw1'];
$psw2 = $_POST['psw2'];




if (!empty($fname) || !empty($lname) || !empty($email)  || !empty($phone)|| !empty($psw1) || !empty($psw2) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tfs";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT phone From register Where phone = ? Limit 1";
  $INSERT = "INSERT Into register (fname ,lname ,phone , email ,psw1, psw2 )values('$fname' ,'$lname' ,'$phone' , '$email' ,'$psw1', psw2)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $phone);
     $stmt->execute();
     $stmt->bind_result($phone);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $fname, $lname,$email,$phone,$psw1,$psw2);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this phone";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?-->

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email  = $_POST['email'];
$phone = $_POST['phone'];
$psw1 = $_POST['psw1'];
$psw2 = $_POST['psw2'];

$con=mysqli_connect("localhost","root","","tfs");
$sql= "INSERT Into register (fname ,lname ,phone , email ,psw1, psw2 )
values('$fname' ,'$lname' ,'$phone' , '$email' ,'$psw1', psw2)";

$r=mysqli_query($con,$sql);
if($r)
{
  echo"DETAILS ADDED SUCCESSFULLY";
}
else
{
  echo"DETAILS NOT ADDED";
}

?>