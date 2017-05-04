<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));
$con =mysqli_connect("localhost","root","","test") or die(json_encode("fail"));

$sql="Select StudentID From Students Where Groups='$data[0]' AND CourseID='$data[1]'";
$i=0;
if($query =mysqli_query($con ,$sql)){
    $array=array();
    while($row = $query->fetch_assoc()){
        $array[$i] =  $row['StudentID'];
        $i=$i+1;

    }
    echo json_encode($array);
}
else{
    echo json_encode("NO");
}