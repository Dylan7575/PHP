<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));

$CourseID= $data[1];
$Semester=$data[0];
$AdminID=$data[2];
$con =mysqli_connect("localhost","root","","test") or die(json_encode("fail"));
$sql="Insert Into Course(CourseID,Semester,AdminID) Values('$CourseID','$Semester','$AdminID')";
if(mysqli_query($con ,$sql)){

    //echo json_encode( "yea");
}
else {
    echo json_encode("NO");
}