<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));
$con =mysqli_connect("localhost","root","","test") or die(json_encode("fail"));


$sql= "SELECT CourseID From Course Where AdminID = '$data' ";
$i=0;
if($query =mysqli_query($con ,$sql)){
    while($row = $query->fetch_assoc()){
        $array[$i] =  $row['CourseID'];
        $i=$i+1;

    }
    echo json_encode($array);



}
else{
    echo json_encode("NO");
}