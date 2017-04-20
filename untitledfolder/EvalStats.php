<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));
$con =mysqli_connect("localhost","root","","test") or die(json_encode("fail"));

$sql= "Select EvaluatorID,EvaluateeID,DateCompleted,Score,GroupID FROM EvalResponse where EvalID = '$data[0]' AND CourseID='$data[1]'";
if($query=mysqli_query($con ,$sql)){
    $array = array();
    $ret=array();
    $i =0;
    while($row = $query->fetch_assoc()) {
        $ret[$i]=$row;
        $i = $i + 1;

    }


    echo json_encode($ret);
    //echo json_encode("penis");
}