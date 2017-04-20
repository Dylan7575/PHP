<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"));


$con =mysqli_connect("localhost","root","","test") or die(json_encode("fail"));
/*
$sql= "SELECT EvalID From EvalResponse Where CourseID ='486'";
$j=0;
if($query=mysqli_query($con,$sql)){
    while ($row = $query ->fetch_assoc()){
        $values[$j]=$row['EvalID'];

        $j=$j+1;
    }


}
else{
    echo json_encode("no");
}
*/
$sql= "Select EvalID,OpenDate,DueDate,CloseDate FROM ActiveEvaluations WHERE CourseID = '$data'  ";

if($query=mysqli_query($con ,$sql)){
    $array = array();
    $ret=array();
    $i =0;
    while($row = $query->fetch_assoc()) {
        $array['openDate'] = $row['OpenDate'];
        $array['closedDate'] = $row['CloseDate'];
        $array['dueDate']=$row['DueDate'];
        $array['evalID']=$row['EvalID'];
        $ret[$i]=$array;
        $i = $i + 1;

    }


        echo json_encode($ret);

}
else{
    echo json_encode("NO");
}

