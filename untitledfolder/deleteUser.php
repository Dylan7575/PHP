<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));
$con =mysqli_connect("localhost","root","","test") or die("fail");
$sql = "Delete From Students WHERE StudentID = '$data[0]'and Groups='$data[1]' and CourseID='$data[2]'";
mysqli_query($con,$sql);
echo json_encode("great success");