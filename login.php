<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="res/css/logins.css">
</head>
<body>
    <center>
    <div id="contain">
    <form action="login.php" method="get">
        <div class="imgcontainer">
            <img src="res/image/user.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
                
            <button type="submit" name="login">Login</button>
            <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" value="cancel" name="cancel" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>

    <?php
        if(isset($_GET['login']))
        {
            include "init/conection.php";
            $username = $_GET["uname"];
            $password = $_GET["psw"];
            $sql = "SELECT * from customer where username = '$username' and password = '$password'";
            $result = mysqli_query($con,$sql);
            $count = mysqli_num_rows($result);

            if($count == 1)
            {

                header("Location: index.php");
            }
            else
            {
                echo "
                <script type='text/javascript'>
                    alert('Username atau Password Salah!');
                </script>";

            }
            mysqli_close($con);
        }
        
    ?>
    </div>
</center>
</body>
</html>