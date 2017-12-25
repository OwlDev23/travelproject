<?php
    include "conection.php";
    $username = $_GET["uname"];
    $password = $_GET["psw"];
    $sql = "SELECT * from customer where username = '$username' and password = '$password'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);

    if($count == 1)
    {

        header("Location: ../index.php");
    }
    else
    {
        echo "
        <script type='text/javascript'>
            alert('Username atau Password Salah!');
        </script>";

    }
    mysqli_close($con);

?>