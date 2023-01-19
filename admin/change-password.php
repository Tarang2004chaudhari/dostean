<?php
session_start();
require_once '../includes/config.php';
require_once '../includes/admin_auth.php';


if (isset($_POST['change_password'])) {
        $old_pass = mysqli_real_escape_string($db,$_POST['old_p']);
        $new_pass = mysqli_real_escape_string($db,$_POST['new_p']);
        $confrm_pass = mysqli_real_escape_string($db,$_POST['confrm_p']);
        $email = $_SESSION['email'];
        $oold = md5($old_pass);
        
        $chk_pass = mysqli_query($db, "SELECT `password` FROM `admin` WHERE `email`='$email'");
        $res=mysqli_fetch_row($chk_pass);
        
        if($res[0]==$oold){
            if ($new_pass == $confrm_pass) {
                $f_pass = md5($confrm_pass);
                $update_pass = mysqli_query($db,"UPDATE `admin` SET `password`='$f_pass' WHERE `email` = '$email'");
                if ($update_pass) {
                    header('location:index');
                }
            }
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Panel</title>
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>


    <div class="container">
        <!-- Start Of Side Bar -->
        <aside>
            <!-- Top Area Start WIth Logo -->
            <div class="top">
                <div class="logo">
                    <img src="../images/logo.png" alt="">
                    <h2>Dostea<span class="danger">n</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <!-- Top Area End WIth Logo -->

            <!-- Side Bar Start -->
            <div class="sidebar">
                <a href="index"  class="">
                    <i class="fas fa-th-large"></i>
                    <h3>Dashboard</h3>
                </a>

                <a href="add-dish" class="">
                    <i class="fas fa-drafting-compass"></i>
                    <h3>Add Dish</h3>
                </a>

                
                <a href="change-password" class="active">
                    <i class="fa fa-lock"></i>
                    <h3>Change Password</h3>
                    <!-- <span class="order-count">20</span> -->
                </a>

                
                <a href="add-img">
                    <i class="fas fa-id-card-alt"></i>
                    <h3>Add Image</h3>
                </a>
                

                <a href="">
                    <i class="fas fa-sign-out-alt"></i>
                    <h3>Logout</h3>
                </a>

            </div>
            <!-- Side Bar End -->
        </aside>
        <!-- End Of Side Bar -->

        <!-- Main-Section Start -->

        <main class="form">
            <h1>Change Password</h1>
            <form action="change-password" method="POST">
                <div class="inputBox">
                    <input type="text" name="old_p" placeholder="Old Password">
                </div>
                <div class="inputBox">
                    <input type="text" name="new_p" placeholder="New Password">
                    <input type="text" name="confrm_p" placeholder="Confirm Password">
                  
                </div>

                <input type="submit" name="change_password" id="" value="Change" class="btn">
            </form>
            <!-- Recent Order End -->
        </main>
        <!-- Main-Section End -->

    </div>

    <script src="js/previewImg.js"></script>
    <script src="js/index.js"></script>
</body>
</html>