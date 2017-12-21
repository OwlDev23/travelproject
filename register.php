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
    <form action="register.php" method="get">
        <div class="imgcontainer">
            <img src="res/image/user.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <br><label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label><b>Nama</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label><b>Alamat</b></label>
            <input type="text" placeholder="Enter Alamat" name="address" required>

            <label><b>Jenis Kelamin</b></label>
            <br>
            
            <input type="radio" name="gender" value="1">Female
            <input type="radio" name="gender" value="0">Male

            <button type="submit" name="register">Register</button>
            <button type="button" value="cancel" name="cancel" class="cancelbtn">Cancel</button>
        </div>

        <div class="container" style="background-color:#f1f1f1;">
            
        </div>
    </form>

    <?php
    if(isset($_GET["register"])){
        //panggil file koneksi
        include "init/conection.php";
        //script insert
         $uname=$_GET["uname"];
         $psw=$_GET["psw"];
         $name=$_GET["name"];
         $address=$_GET["address"];
         $gender=$_GET["gender"];
         $sql="INSERT INTO customer (username, nama, password, alamat, jk, foto) VALUES ('$uname','$name','$psw','$address','$gender', NULL);";
         $result = mysqli_query($con, $sql);
         if($result)
         {
             
                echo "
                <script type='text/javascript'>
                    alert('sukses');
                </script>";
                header("Location: index.php");

         }
         else
         {
            echo "
            <script type='text/javascript'>
                alert('gagal');
            </script>";
         }
         mysqli_close($con);
    }
?>
    </div>
</center>
</body>
</html>