<?php
session_start();
require_once '../includes/config.php';
require_once '../includes/admin_auth.php';
$menu_list = mysqli_query($db,"SELECT * FROM `menu`");
$gallery = mysqli_query($db,"SELECT * FROM `gallery`");
$tot_review = mysqli_query($db,"SELECT * FROM review");

$tot_dish = mysqli_num_rows($menu_list);
$obtain_reviw = 0;
$total_reviw = mysqli_num_rows($tot_review);
while($r_res = mysqli_fetch_array($tot_review)){
    $obtain_reviw = $obtain_reviw + $r_res['rating'];
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
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
                <a href="index"  class="active">
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

        <main>
            <h1>Dashboard</h1>


            <div class="insights">
                <!-- Order -->
                <div class="sales">
                    <i class="fa-solid fa-bowl-food"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Dishes</h3>
                            <h1><?php echo $tot_dish; ?></h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36" ></circle>
                            </svg>
                            <div class="number">
                                <p style="text-align: center; position:absolute;"><i class="fa-solid fa-bowl-food"></i></p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">
                        All Time
                    </small>
                </div>
                <!-- Rating -->
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Rating</h3>
                            <h1><?php echo $obtain_reviw/$total_reviw.'/5'; ?></h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36" ></circle>
                            </svg>
                            <div class="number">
                                <p><?php echo ($obtain_reviw/($total_reviw*5))*100 .'%'; ?></p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">
                        All Time
                    </small>
                </div>
                <!-- Total Income -->
                <div class="income">
                    <i class="fa-solid fa-comment"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Review</h3>
                            <h1><?php echo $total_reviw; ?></h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36" ></circle>
                            </svg>
                            <div class="number">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">
                        All Time
                    </small>
                </div>
            </div>
            <!-- Insight Area End -->
            <!-- Our Dish Start-->
            <div class="recent-order">
                <h2>Our Dishes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Index</th>
                            <th>Name</th>
                            <th>Price(&#8377;)</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $index = 1;
                        while($m_res = mysqli_fetch_array($menu_list)) { ?>
                        <tr>
                            <td><?php echo $index; ?></td>
                            <td><?php echo $m_res['d_name']; ?></td>
                            <td><?php echo $m_res['price'].'.00'; ?></td>
                            <td class="warning" ><a href="update-dish?update_id=<?php echo $m_res['id']; ?>">Change</a></td>
                            <td class="danger"><a href="delete-dish?dish_id=<?php echo $m_res['id'];?>">Delete</a></td>
                        </tr>
                        <?php $index++; }?>
                    </tbody>
                </table>

            </div>
            <!-- Our  Dish End-->
        </main>
        <!-- Main-Section End -->

    </div>


    <script src="js/index.js"></script>
</body>
</html>