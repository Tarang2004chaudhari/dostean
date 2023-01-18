
<?php
session_start();
require_once 'includes/config.php';

if (isset($_POST['post_review'])) {
    # code...
    $rate = mysqli_real_escape_string($db,$_POST['rate']);
    $name = mysqli_real_escape_string($db,$_POST['name']);
    $expi = mysqli_real_escape_string($db,$_POST['expirence']);
    $date= date("Y-m-d h:i:s");
    // echo $rate.' '.$name.' '.$expi;
    // exit();
    $insert = mysqli_query($db,"INSERT INTO `review`(`name`, `descrption`, `rating`, `date`) VALUES ('$name','$expi','$rate','$date')");

    if ($insert) {
        # code...
        $_SESSION['Rate'] = "Thanks For Rating";
        header('location:review');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="css/review.css">
</head>
<body>
    <div class="g-review-container">
        
        <div class="star-widget">
           
 
            <?php if(!isset($_SESSION['Rate'])){ ?>
            <form action="review" method="POST">
                <header></header>
                <input type="radio" name="rate" id="rate-5" value="5">
                <label for="rate-5"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-4" value="4">
                <label for="rate-4" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-3" value="3">
                <label for="rate-3" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-2" value="2">
                <label for="rate-2" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-1" value="1">
                <label for="rate-1" class="fas fa-star"></label>
                
                <div class="text-area">
                    <textarea name="name" cols="5" placeholder="Your Name"></textarea>
                </div>
                <div class="text-area">
                    <textarea name="expirence" cols="30" placeholder="Describe your experience"></textarea>
                </div>
                <div class="sub-btn">
                    <button type="submit" name="post_review">Post</button>
                </div>
            </form>
            <?php }else{ ?>
                <p style="font-size: 20px;color:#eee;">Thanks For Rating 😊</p>
                <?php }
                session_destroy(); ?>
        </div>
    </div>
    <!-- <script>
        const p_btn = document.querySelector('.sub-btn button');
        const post = document.querySelector('.post');
        const star_widget = document.querySelector('.star-widget');

        p_btn.onclick = () =>{
            star_widget.style.display="none";
            post.style.display = "block";
        }
    </script> -->
</body>
</html>