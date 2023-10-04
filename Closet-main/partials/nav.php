<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);
?>

<nav class="mainNav">
    <div class="logo kbold">
        Closet
    </div>
    <div class="links kmedium">
        <?php
        $links = [];
        if (!isset($_SESSION['user'])){
            $links = ["Men","Women","Kids"];
        }else{
            $links = ["Men","Women","Kids","Selling"];
        }

        foreach ($links as $link){
            $l = strtolower($link);
            $link = ucfirst($link);
            echo "<div onclick=window.location.href='./$l.php' class='navlink'>$link</div>";
        }
        ?>
    </div>
    <div class="navButtons">
        <div id="hiddenBtns" class="d-none">
            <?php
            if (isset($_SESSION['user'])){
                ?>
                <div onclick="window.location.href='./services/logout.php'" class="navbtn">
                    <ion-icon name="log-out-outline"></ion-icon>
                </div>
                    <?php
            }else{
                ?>
                <div class="navbtn" onclick="window.location.href = './login.php'">
                        <ion-icon name="person-circle-outline" title="Account"></ion-icon>
                </div>
                <div  class="navbtn ">
                        <ion-icon name="cart-outline" title="Account"></ion-icon>
                </div>
                <?php
            }
            ?>
        </div>
        <div id="triggerNavBtn">
            <div class="navbtn">
                <ion-icon id="triggerIcon" name="menu-outline"></ion-icon>
            </div>
        </div>
    </div>
</nav>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
