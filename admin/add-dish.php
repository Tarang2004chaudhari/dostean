<?php
session_start();
require_once '../includes/config.php';
require_once '../includes/admin_auth.php';

    $name="";
    $price = "";
    $ingridient="";
    $type = "";
    $description = "";
    $image="";
    $special_dish="";

if (isset($_POST['add_dish'])) {
        $name =  mysqli_real_escape_string($db,$_POST['name']);
        $price =  mysqli_real_escape_string($db,$_POST['price']);
        $ingridient =  mysqli_real_escape_string($db,$_POST['ingridient']);
        $type =  mysqli_real_escape_string($db,$_POST['type']);
        $description =  mysqli_real_escape_string($db,$_POST['description']);
        // echo $name.' '.$price.' '.$ingridient.' '.$type.' '.$description.' '.$image.' '$_FILES['images']['name'];
        // exit();
        $dish_image = $_FILES['images']['name'];
        $target = "images/".basename($_FILES['images']['name']);

        if ( move_uploaded_file($_FILES['images']['tmp_name'],$target)) {
          $insert = mysqli_query($db,"INSERT INTO `menu`(`d_name`, `price`, `images`, `ingridient`, `type`, `Description`, `Special_dish`)
           VALUES ('$name','$price','$dish_image','$ingridient','$type','$description','0')"); 
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

                <a href="add-dish" class="active">
                    <i class="fas fa-drafting-compass"></i>
                    <h3>Add Dish</h3>
                </a>

                
                <a href="change-password">
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
            <h1>Add Dish</h1>
            <form action="add-dish" method="POST"  enctype="multipart/form-data">
                <div class="inputBox">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="price" placeholder="Price" required>
                </div>
                <div class="inputBox">
                    <input type="text" name="ingridient" placeholder="Ingrident" required>
                    <input type="text" name="type" placeholder="Drink/Lunch/Breakfast/Dinner" required>
                    <!-- <select name="" id="type-dish">
                        <option value="Mocktails"></option>
                        <option value="Shakes"></option>
                        <option value="Tea"></option>
                        <option value="Soups"></option>
                        <option value="Hot-Cofee"></option>
                        <option value="Beverages"></option>
                        <option value="Fries"></option>
                        <option value="Bread"></option>
                        <option value="Lebanese"></option>
                        <option value="Wrap"></option>
                        <option value="Sandwhich"></option>
                        <option value="Buns"></option>
                        <option value="Pizza"></option>
                        <option value="Pasta"></option>
                        <option value="Baked Dish"></option>
                        <option value="Rice"></option>
                        <option value="Noodels"></option>
                        <option value="Chinese Gravy"></option>
                        <option value="Maggie"></option>
                        <option value="Indian Curry"></option>
                        <option value="Indian Bread"></option>
                        <option value="Samosa"></option>
                        <option value="Salad"></option>
                        <option value="Dessert"></option>
                        <option value="Accomplishment"></option>
                    </select> -->
                </div>
                <div class="inputBox">
                    <textarea name="description" id="" cols="30" rows="10" placeholder="Write Description Of Dish" required></textarea>
                </div>
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