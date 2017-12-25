<?php
    session_start();
    include "conection.php";
    $sql = "select nama_kota from kota";
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $kota = $_SESSION["kota"];
            if($kota == $row["nama_kota"])
            {
                  echo("<option value='".$row["nama_kota"]."' selected>".$row["nama_kota"]."</option>");
            }
            else
            {
                echo("<option value='".$row["nama_kota"]."'>".$row["nama_kota"]."</option>");            
            }

        }
    }
    mysqli_close($con);
?>