<?php
session_start();
require_once 'includes/config.php';
if (isset($_POST['login'])) {
    $log_email =  mysqli_real_escape_string($db,$_POST['email']);	
	$log_pass = mysqli_real_escape_string($db,$_POST['password']);
    // echo $log_email.' '.$log_pass; 
    // exit();
    $Login_key = md5($log_pass);
    $query = "SELECT * FROM `admin` WHERE email ='$log_email' AND Password = '$Login_key'";
    $result= mysqli_query($db,$query);
    $login_error = "";
    if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $log_email;
        if (!empty($_POST['remember-me'])) {
            # code...
            setcookie('uname',$_SESSION['email'],time()+2592000);
            header('location:admin/index');
        }else{
            header('location:admin/index');
        }

    }else{
     $login_error = "Email Or password wrong"; 
     header('location:login');
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>
    
    <section>
        <div class="image-box">
            <img src="images/img1.jpg" alt="">
        </div>
        <div class="content-box">
            <div class="form-box active" id="login_form">
                <h2>Admin Login</h2>
                <form action="login" method="POST">
                    <?php if (isset($login_error)) {?>
                         <p>Email Or password wrong</p>
                       <?php }?>
                    <div class="input-box">
                        <span>Email</span>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span>Password</span>
                        <input type="password" name="password" required>
                    </div>
                    <div class="remember">
                        <label for="checkbox"><input type="checkbox" name="remember-me" id="checkbox">Remember me</label>
                    </div>

                    <div class="input-box">
                        <input type="submit" value="Login" name="login">
                    </div>
                    <div class="input-box">
                        <p>Forgot Password ?  <span class="login">Click Here</span></p>
                    </div>
                </form>
                <h3>Follow us on</h3>
                <ul class="sci">
                    <li><a href="" class="fa-brands fa-facebook-f"></a></li>
                    <li><a href="" class="fa-brands fa-twitter"></a></li>
                    <li><a href="" class="fa-brands fa-instagram"></a></li>
                </ul>
            </div>
            <div class="form-box" id="forget_form">
                <h2>Forget Password</h2>
                <form action="">
                    <div class="input-box">
                        <span>Email</span>
                        <input type="email" name="email">
                    </div>
                    
                    <div class="input-box">
                        <input type="submit" value="Send me" name="login">
                    </div>
                    <div class="input-box">
                        <p>Don't have an account?<a href="#"> Sign up</a></p>
                    </div>
                    <div class="input-box">
                        <p>Go to login ?  <a href="">Click Here</a></p>
                    </div>
                </form>
                <h3>Follow us on</h3>
                <ul class="sci">
                    <li><a href="" class="fa-brands fa-facebook-f"></a></li>
                    <li><a href="" class="fa-brands fa-twitter"></a></li>
                    <li><a href="" class="fa-brands fa-instagram"></a></li>
                </ul>
            </div>
        </div>
    </section>

    <script src="js/login.js"></script>
</body>
</html>