<?php
session_start();
require_once '../includes/config.php';
require_once '../includes/admin_auth.php';


if (isset($_POST['add_dish'])) {
        // echo $name.' '.$price.' '.$ingridient.' '.$type.' '.$description.' '.$image.' '$_FILES['images']['name'];
        // exit();
        $dish_image = $_FILES['images']['name'];
        $target = "gal-img/".basename($_FILES['images']['name']);
        $date= date("Y-m-d h:i:s");

        if ( move_uploaded_file($_FILES['images']['tmp_name'],$target)) {
          $insert = mysqli_query($db,"INSERT INTO `gallery`(`images`, `date`)
           VALUES ('$dish_image','$date')"); 
           if ($insert) {
            # code...
            header('location:index');
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

                
                <a href="change-password">
                    <i class="fa fa-lock"></i>
                    <h3>Change Password</h3>
                    <!-- <span class="order-count">20</span> -->
                </a>

                
                <a href="add-img" class="active">
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
            <h1>Add Image</h1>
            <form action="add-img" method="POST"  enctype="multipart/form-data">
                
                <input type="file" name="images" id="file_image" required> 
                <label for="file_image" class="fas fa-image" id=""></label>
                <img src="images/" alt="not-selected" id="preview_img" >
                <br>
                <input type="submit" name="add_dish" id="" value="Add" class="btn" style="cursor: pointer;">
            </form>
            <!-- Recent Order End -->
        </main>
        <!-- Main-Section End -->

    </div>

    <script src="js/previewImg.js"></script>
    <script src="js/index.js"></script>
</body>
</html>