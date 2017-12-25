<?php
    include "conection.php";
    $id = $_GET["id"];
    $action = $_GET["action"];
    $sql ="";
    if($action == 1)
    {
        $sql = "DELETE FROM detailhotel WHERE id_hotel= '$id'";
    }
    else
    {
        $sql = "DELETE FROM detailwisata WHERE id_wisata= '$id'";
    }
    $result = mysqli_query($con, $sql);
    if($result)
    {
        header('Location: ../keranjang.php');
    }
    else
    {
        echo "
                <script type='text/javascript'>
                    alert('Gagal hapus');
                    window.location.href = '../keranjang.php';
                </script>";
    }
?>