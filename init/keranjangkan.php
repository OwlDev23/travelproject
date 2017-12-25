<?php
    session_start();
    include "conection.php";


    
    if(isset($_SESSION["username"]))
    {
        $user = $_SESSION["username"]; 
        $kota = $_SESSION["kota"];
        $wisata = $_SESSION["wisata"];
        getkeranjang();
        
    }
    else
    {
        echo "
        <script type='text/javascript'>
            alert('Login Dahulu!');
            window.location.href = '../index.php';
        </script>";
    }

    function getkeranjang()
    {

        include "conection.php";        
        $user = $_SESSION["username"]; 
        $sql = "SELECT * FROM keranjang where username = '$user'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) == 1)
        {
            //isert ke detailwisata
            $id = $_GET["id"];
            $id_keranjang = getidkeranjang();
            $sql = "INSERT INTO detail".$_SESSION["wisata"]."(id_keranjang, id_".$_SESSION["wisata"].") VALUES ('$id_keranjang', '$id')";
            $result = mysqli_query($con, $sql);
            if($result)
            {
                
                    echo "
                    <script type='text/javascript'>
                        alert('Dikeranjangkan');
                        window.location.href = '../index.php';
                    </script>";
            }
            else
            {
                echo "
                <script type='text/javascript'>
                    alert('gagal dikeranjangkan'.getidkeranjang());
                </script>";
            }
        }
        else if(mysqli_num_rows($result) == 0)
        {
            $sql = "INSERT INTO keranjang (username) VALUES ('$user')";
            $result = mysqli_query($con, $sql);
            if($result)
            {
                
                getidkeranjang();       

            }
            else
            {
                echo "
                <script type='text/javascript'>
                    alert('gagal');
                </script>";
            }
        }
    }
    
    function getidkeranjang()
    {
        include "conection.php";        
        $user = $_SESSION["username"]; 
        $sql = "SELECT * FROM keranjang where username = '$user'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $_SESSION["idkeranjang"] = $row["id_keranjang"];
                return $row["id_keranjang"];
            }
        }
        
    }
    mysqli_close($con);
?>