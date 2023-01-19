<?php 
session_start();
require_once '../includes/config.php';
require_once '../includes/admin_auth.php';

$name="";
$price = "";
$ingridient="";
$type = "";

if (isset($_POST['u_dish'])) {
    $name =  mysqli_real_escape_string($db,$_POST['name']);
    $price =  mysqli_real_escape_string($db,$_POST['price']);
    $ingridient =  mysqli_real_escape_string($db,$_POST['ingridient']);
    $type =  mysqli_real_escape_string($db,$_POST['type']);
    $id = mysqli_real_escape_string($db,$_POST['id']);;
    $usql = mysqli_query($db,"UPDATE `menu` SET `d_name`='$name',`price`='$price',`ingridient`='$ingridient',`type`='$type' WHERE `id` = $id");
   
    if ($usql) {
        # code...

        header('location:index');
    }
}   
?>