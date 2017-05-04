<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));

$sql = "Select CourseID From Students Where StudentID='$data'";
$con =mysqli_connect("localhost","root","","test") or die(json_encode("fail"));
$i=0;
if($query =mysqli_query($con ,$sql)){
    $array=array();
    while($row = $query->fetch_row()){
        $array[$i]=  $row[0];
        $i=$i+1;
    }
    //echo $array[0];

$i=0;

}
else{
    echo json_encode("NO");
}
$sql= "SELECT EvalID From EvalResponse Where EvaluatorID='$data'";
if($query = mysqli_query($con,$sql)){
    $arr=array();
    while($row = $query->fetch_row()){
        $arr[$i]=  $row[0];
        $i=$i+1;
    }
}
else{
    echo json_encode('no');
}
$i=0;
$not = implode(',',$arr);
//echo$array[1];
$search = implode(',',$array);
//echo $search;


$sql= "Select CourseID,EvalID,OpenDate,DueDate,CloseDate FROM ActiveEvaluations ";
if($query =mysqli_query($con ,$sql)){
    $array=array();
    while($row = $query->fetch_assoc()){
        $array[$i]=  $row;
        $i=$i+1;
    }
    echo json_encode($array);
}
else{
    echo json_encode("NO");
}