<?php
require_once "cas.php";
session_start();
global $user, $auth;
$user =$_SESSION['name'];
$auth =$_SESSION['auth'];
echo $auth;
if($auth === "true"){
    header("location: http://localhost:4200");
}
else{
    header("location: https://localhost/index.php");
}

?>
<script>
    var init = false;
    var username= '<?php echo $user;?>';
    var auth = '<?php echo $auth;?>';
    if (init == false){
        localStorage.setItem('user',username);
        localStorage.setItem('auth',auth);
        in = true;
    }
</script>
