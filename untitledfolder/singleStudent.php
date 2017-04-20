<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));




$con =mysqli_connect("localhost","root","","test") or die(json_encode("fail"));

$sql= "INSERT INTO Students (StudentID,Groups,CourseID) VALUES('$data[0]','$data[1]','$data[2]')";

if(mysqli_query($con ,$sql)){
    echo json_encode( "yea");
}
else{
    echo json_encode("NO");
}
//echo json_encode("no");
