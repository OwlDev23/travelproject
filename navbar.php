<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="res/css/navbar.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/navbar.js"></script>
</head>
<body>
    <div id="connav">
        <div id="logo">
            <img src="res/image/logo1.png" width="140" height="35" style="margin:5px;">
        </div>
        <div class="navbar">
              <a href="index.php">Home</a>
              <a href="register.php">Register</a>
              
              
                <?php
                    if(isset($_SESSION['username']))
                    {
                        echo("
                            <div class='dropdown'>
                            <button class='dropbtn'>Hallo ".$_SESSION["username"]."
                                <i class='fa fa-caret-down'></i>
                                </button>
                                <div class='dropdown-content'>
                                    <a href='profile.php'>Profile</a>
                                    <a href='keranjang.php'>Keranjangku</a>
                                    <a href='pesan.php'>Pesanan saya</a>
                                    <a href='init/sessiondestroy.php'>Logout</a>
                                </div>
                                </div>     
                            </div>
                        ");
                    }
                    else
                    {
                        echo("
                            <a href='./login.php'>Login</a>
                        ");
                    }
                ?>
                    
        </div>
    </div>
</body>
</html>