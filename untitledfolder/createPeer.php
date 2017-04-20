<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));
$con =mysqli_connect("localhost","root","","test") or die("fail");
$sql = mysqli_query($con ,"INSERT INTO (due,close,open) Values($data) ");
$row =mysqli_fetch_array($sql,2);
echo json_encode($row[0]);