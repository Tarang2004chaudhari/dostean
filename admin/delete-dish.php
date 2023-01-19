<?php
session_start();
require_once '../includes/config.php';
require_once '../includes/admin_auth.php';
    $id = $_GET['dish_id']; 
    $del_query = mysqli_query($db,"DELETE FROM `menu` WHERE `id` = $id");
    if ($del_query) {
        # code...
        header('location:index');
    }
?>