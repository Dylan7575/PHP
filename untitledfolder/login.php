<?php
header("Access-Control-Allow-Origin: *");
require_once "cas.php";
session_start();

global $user, $auth;
$user =$_SESSION['name'];
$con =mysqli_connect("localhost","root","","test") or die(json_encode("fail"));


$sql= "Select AdminID from Administrators where AdminID= '$user' ";
if($query=mysqli_query($con ,$sql)){

   $row=$query->fetch_row();
   if ($row!=null){
       $_SESSION['auth']="admin";
   }
   else{
       $_SESSION['auth']="student";
   }
}
else{
    echo json_encode("NO");
}
$auth =$_SESSION['auth'];
session_name($_SESSION['name']);


header("location: http://localhost:4200");

?>
