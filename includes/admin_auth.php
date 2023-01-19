<?php    
error_reporting(0);
if (!isset($_SESSION['email']) && $_COOKIE['uname'] == "") {
    header('Location:../home');
}
else if($_COOKIE['uname'] != "" )
{
    $_SESSION['email']=$_COOKIE['uname'];
    $uname = $_SESSION['Username'];
}

?>