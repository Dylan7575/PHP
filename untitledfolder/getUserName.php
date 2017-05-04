<?php
header("Access-Control-Allow-Origin:http://localhost:4200");
header ("Access-Control-Allow-Credentials:true");

session_start();
if($_SESSION==null){
    echo json_encode('NONE');
}
else{
    $send[0]=$_SESSION['name'];
    $send[1]=$_SESSION['auth'];
    echo json_encode($send);
}
