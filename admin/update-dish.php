<?php 
session_start();
require_once '../includes/config.php';
require_once '../includes/admin_auth.php';
$id = $_GET['update_id'];
$menu_list = mysqli_query($db,"SELECT * FROM `menu` WHERE `id` =$id");
$m_res = mysqli_fetch_array($menu_list);

$name="";
$price = "";
$ingridient="";
$type = "";

if (isset($_POST['u_dish'])) {
    # code...
    echo "Krpal";
    exit();
    $name =  mysqli_real_escape_string($db,$_POST['name']);
    $price =  mysqli_real_escape_string($db,$_POST['price']);
    $ingridient =  mysqli_real_escape_string($db,$_POST['ingridient']);
    $type =  mysqli_real_escape_string($db,$_POST['type']);

    echo $name.' '.$price.' '.$ingridient.' '.$type;
    // $update_query = mysqli_query($db,"UPDATE `menu` SET `d_name`='$name',`price`='$price',`ingridient`='$ingridient',`type`='$type' WHERE `id` = $id");
    // if ($update_query) {
    //     # code...
    //     header('location:index');
    // }
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
            <h1>Update Dish</h1>
            <form action="up-dish" method="POST"  enctype="multipart/form-data">
                <div class="inputBox">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="text" name="name" placeholder="Name" value="<?php echo $m_res['d_name']; ?>">
                    <input type="text" name="price" placeholder="Price" value="<?php echo $m_res['price']; ?>">
                </div>
                <div class="inputBox">
                    <input type="text" name="ingridient" placeholder="Ingrident" value="<?php echo $m_res['ingridient']; ?>">
                    <input type="text" name="type" placeholder="Type" value="<?php echo $m_res['type']; ?>">
                </div>

                <input type="submit" name="u_dish" id="" value="Update" class="btn">
            </form>
            <!-- Recent Order End -->
        </main>
        <!-- Main-Section End -->

    </div>

    <!-- <script src="js/index.js"></script> -->
</body>
</html>