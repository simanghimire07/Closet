<?php
require './services/conn.php';
require './classes/User.php';
session_start();
if (isset($_SESSION['user'])){
    header('location: ./index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome back</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body data-barba="wrapper">
<!--    --><?php //require './partials/nav.php'?>

<?php
if (isset($_GET['msg'])){
    ?>
    <div class="alert alert-success kmedium">
        <?php echo $_GET['msg'];?>
    </div>
    <?php
}
?>
    <section class="login-section" id="mainSection">


        <div
                data-aos="zoom-in"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-once="true"
                class="form-section"
                id="form-section"
        >
            <div
                    onclick="window.location.href = './index.php'"
                    class="back-to-home kbold">
                <ion-icon name="caret-back-outline"></ion-icon>
                Back to home
            </div>
            <div class="form-title mmedium">
                Welcome back
            </div>
            <div class="form-subtitle kmedium">
                Welcome back! Please enter your info for logging in
            </div>

            <div class="form">
                <form autocomplete="off" method="post" action="./services/account-management.php">
                    <div class="input-group">
                        <input required name="login_email" type="text" max="50" placeholder="Enter your email">
                    </div>
                    <div class="input-group">
                        <input required type="password" name="login_pwd" max="50" placeholder="Enter your password">
                        <br>
                        <span class="forgot-password kregular">
                            Forgot password?
                        </span>
                    </div>
                    <input type="hidden" name="isClickedLoginBtn" value="1">
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div
                id="picture-section"
                class="picture-section">
            <div
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out"
                    data-aos-once="false"
            >
                <div class="mask-info kmedium">
                    <span id="mark-text">
                    Closet is here to provide you with a platform where you can sell or buy any attire you want.
                    So login now or if you don't have an account, you can create one right now.
                    </span>
                    <br><br>
                    <span id="openSignup">Signup now!</span>
                </div>
            </div>
        </div>


        <div
                data-aos="zoom-in"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-once="true"
                class="form-section"
                id="signup-section"
        >
            <div
                    onclick="window.location.href = './index.php'"
                    class="back-to-home kbold">
                <ion-icon name="caret-back-outline"></ion-icon>
                Back to home
            </div>
            <div class="form-title mmedium">
                Hello there
            </div>
            <div class="form-subtitle kmedium">
                Create a new account and start using our service right away
            </div>

            <div class="form">
                <form autocomplete="off" method="post" action="./services/account-management.php">
                    <div class="input-group">
                        <input required type="text" name="name" max="50" placeholder="Enter your name">
                    </div>
                    <div class="input-group">
                        <input required type="text" name="email" max="50" placeholder="Enter your email">
                    </div>
                    <div class="input-group">
                        <input required type="name" name="username" max="50" placeholder="What should we call you? (Username)">
                    </div>
                    <div class="input-group">
                        <input required type="password" name="password" max="50" placeholder="Select your password">
                    </div>
                    <input type="hidden" name="login" value="signup">
                    <input type="hidden" name="isClickedSignupBtn" value="1">
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary">
                            Signup
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="./js/login-page.js"></script>

</html>
