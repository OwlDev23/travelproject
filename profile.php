
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="res/css/logins.css">
</head>
<body>
    <?php
        include "navbarsecond.php";
        session_start();
        include "init/conection.php";
        $sql = "SELECT * from customer WHERE username ='".$_SESSION["username"]."'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)==1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $username = $row["username"];
                $nama = $row["nama"];
                $alamat = $row["alamat"];
                $jk = $row["jk"];
            }
        }

    ?>
<center>
    <div id="contain">
    <form action="" method="get">
        <div class="imgcontainer">
            <img src="res/image/user.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>Username</b></label><br>
            <label><?php echo "$username"; ?></b></label><br>

            <label><b>Nama</b></label><br>
            <label><?php echo "$nama"; ?></b></label><br>

            <label><b>Alamat</b></label><br>
            <label><?php echo "$alamat"; ?></b></label><br>

            <label><b>Jenis Kelamin</b></label><br>
            <label><?php 
                            if($jk == 0)
                            {
                                echo "Laki-Laki";
                            }else
                            {
                                echo"perempuan";
                            }

            ?></b></label><br>

            <button type="submit" name="register" ><a href="editprofile.php" style="text-decoration: none; color: white;"> Edit Profile</a></button>
        </div>

        <div class="container" style="background-color:#f1f1f1;">
            
        </div>
    </form>
</div>
</center>
</body>
</html>