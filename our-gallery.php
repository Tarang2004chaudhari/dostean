<?php 
    require_once 'includes/config.php';
    $gallary = mysqli_query($db,"SELECT * FROM `gallery`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

<?php require_once 'header.php'; ?>
<h1 class="heading" > <span>Our Gallery</span> </h1>
<div class="gl-container" data-aos="fade-down-right">
        <div class="img-container">
            <?php 
            while($gal_res = mysqli_fetch_array($gallary)){ ?>
           
            <div class="image" data-aos="fade" data-aos-duration="1000"><img src="admin/gal-img/<?php echo $gal_res['images']; ?>" alt=""></div>
            <?php } ?>

        </div>
        <div class="popup-img">
            <span>&times;</span>
            <img src="images/img1.jpg" alt="">
        </div>
    </div>
            <?php require_once 'footer.php'; ?>
        <!-- Animation On Scroll Start -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Animation On Scroll end -->
<script>
    document.querySelectorAll('.img-container img').forEach(image =>{
        image.onclick = () =>{
            document.querySelector('.popup-img').style.display='block';
            document.querySelector('.popup-img img').src = image.getAttribute('src');
        }
         document.querySelector('.popup-img span').onclick = () =>{
            document.querySelector('.popup-img').style.display='none';
         }
    });
</script>
</body>
</html>