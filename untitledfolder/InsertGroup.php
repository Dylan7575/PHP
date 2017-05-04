<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));
$con =mysqli_connect("localhost","root","","test") or die(json_encode("fail"));
$sql="Insert Into Groups(CourseID,Groups) Values('$data[1]','$data[0]')";
if(mysqli_query($con ,$sql)){

    //echo json_encode( "yea");
}
else {
    echo json_encode("NO");
}