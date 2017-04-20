<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));
$con =mysqli_connect("localhost","root","","test") or die(json_encode("fail"));

$sql="Select `StudentID`, `Groups`  From Students Where CourseID='$data'";
$i=0;
if($query =mysqli_query($con ,$sql)){
    $array=array();
    while($row = $query->fetch_assoc()){
        $array[$i] =  $row;
        $i=$i+1;

    }
    echo json_encode($array);



}
else{
    echo json_encode("NO");
}