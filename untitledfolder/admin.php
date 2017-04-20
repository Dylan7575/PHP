<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));
$data = 'dcl75';
$con =mysqli_connect("localhost","root","","test") or die("fail");
$sql = mysqli_query($con ,"SELECT AdminID FROM Administrators WHERE AdminID = '$data' ");
$row =mysqli_fetch_array($sql,2);
echo json_encode($row[0]);
