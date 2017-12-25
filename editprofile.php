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
                $password = $row["password"];
                $nama = $row["nama"];
                $alamat = $row["alamat"];
                $jk = $row["jk"];
            }
        }

    ?>
<center>
    <div id="contain">
    <form action="" method="post">
        <div class="imgcontainer">
            <img src="res/image/user.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <input type="hidden" value="<?php echo $row['username'];?>" name="id">
            <label><b>Username</b></label><br>
            <input type="text" value="<?php echo $username;?>" placeholder="Enter Username" name="uname" required readonly>

            <label><b>Password</b></label><br>
            <input type="text" value="<?php echo $password;?>" placeholder="Enter Username" name="psw" required>

            <label><b>Nama</b></label><br>
            <input type="text" value="<?php echo $nama;?>" placeholder="Enter Username" name="name" required>

            <label><b>Alamat</b></label><br>
            <input type="text" value="<?php echo $alamat;?>" placeholder="Enter Username" name="address" required>

            <label><b>Jenis Kelamin</b></label><br>
            <?php
                if($jk == 0)
                {
                    echo("
                    <input type='radio' name='gender' value='1' >Female
                    <input type='radio' name='gender' value='0' checked>Male
                    ");
                }
                else
                {
                    echo("
                    <input type='radio' name='gender' value='1' checked>Female
                    <input type='radio' name='gender' value='0'>Male
                    ");
                }
            ?>
            

            <button type="submit" name="save">Save Profile</button>
            <button type="button" value="cancel" name="cancel" class="cancelbtn">Cancel</button>
        </div>

        <div class="container" style="background-color:#f1f1f1;">
            
        </div>
    </form>
</div>
</center>
</body>
</html>
<?php
    if(isset($_POST['save']))
    {
        $id=$_POST['id'];
        $uname=$username;
        $psw=$_POST["psw"];
        $name=$_POST["name"];
        $address=$_POST["address"];
        $jk=$_POST["gender"];
        echo $jk;
        $sql = "UPDATE customer SET nama = '$name', password = '$psw', alamat = '$address', jk = '$jk' WHERE username = '$username'";
        if(mysqli_query($con, $sql))
        {
            echo "
                <script type='text/javascript'>
                    alert('Update Sukkses!');
                    window.location.href = 'profile.php';
                </script>";
        }
        else
        {
            echo "
                <script type='text/javascript'>
                    alert('Update Gagal!');
                </script>";
        }
    }
    
    mysqli_close($con);
?>