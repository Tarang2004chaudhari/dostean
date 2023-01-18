<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root{
    --brown:#5c2624;
    --dark-brown:#411e1c;
    --black:#444;
    --light-brown:#783e3c;
    --border:.3rem solid #936967;
    --border-hover:.1rem solid var(--black);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}   

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    font-size: 2.2rem;
    color:var(--brown);
    padding:1rem 0;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.4rem;
    color:var(--light-brown);
    padding:1rem 0;
}

.footer .box-container .box a i{
    color:var(--dark-brown);
    padding-right: .5rem;
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .box-container .box .map{
    width:100%;
}

.footer .share{
    padding:1rem 0;
    text-align: center;
}

.footer .share a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    color:#fff;
    background:var(--brown);
    margin:0 .3rem;
    border-radius: 50%; 
}

.footer .share a:hover{
    background:var(--black);
}

.footer .credit{
    border-top: var(--brown);
    margin-top: 2rem;
    padding:0 1rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color:var(--light-brown);
    text-align: center;
}

.footer .credit span{
    color:var(--brown);
}

    </style>
</head>
<body>
    

<section class="footer">

    <div class="box-container">


        <div class="box">
            <h3>quick links</h3>
            <a href="home#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="our-menu"> <i class="fas fa-arrow-right"></i> our-menu </a>
            <a href="our-gallery"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="review"> <i class="fas fa-arrow-right"></i> reviews </a>
        </div>

        <div class="box" >
            <h3>We are Also Available On</h3>
            <a href="https://link.zomato.com/xqzv/rshare?id=33055995e49b9506" target="_blank" style="height: 80px;width:60px"> <img src="images/Zomato_logo.png" alt="" style="height: 100%;width:100%" > </a>
            <a href="https://www.swiggy.com/restaurants/dostea-cafe-and-restaurant-piplod-surat-599246" target="_blank" style="height: 80px;width:60px"> <img src="images/Swiggy_logo.png" alt="" style="height: 100%;width:100%" > </a>
            <a href="http://dealboxapp.in/Food-Beverages/Dostea-Piplod-MV8xOTc0MDM%3D" target="_blank" style="height: 80px;width:60px"> <img src="images/deal_box.png" alt=""  style="height: 100%;width:100%" > </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="tel:+91 9377778726"> <i class="fas fa-phone"></i> Call Now </a>
            <!-- <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a> -->
            <a href="mailto:Dosteansurat@gmail.com"> <i class="fas fa-envelope"></i> Mail US </a>
            <!-- <img src="image/worldmap.png" class="map" alt=""> -->
        </div>
        
    </div>

    <div class="share">
        <a href="" class="fab fa-facebook-f"></a>
        <!-- <a href="#" class="fab fa-twitter"></a> -->
        <a href="https://www.instagram.com/dostean_surat/" class="fab fa-instagram"></a>
    </div>

    <div class="credit"> created by <span>Titans</span> | all rights reserved! </div>

</section>
</body>
</html>