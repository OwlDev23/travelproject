<?php
    function getidkeranjang()
    {
		include "init/conection.php";
		
        $user = $_SESSION["username"]; 
        $sql = "SELECT * FROM keranjang where username = '$user'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                return $row["id_keranjang"];
            }
        }
        
	}

    $harga = $_GET["harga"];
    $idkeranjang = getidkeranjang();
    $date = 
    $sql = "INSERT INTO pesan( id_keranjang, tgl) VALUES ( '$idkeranjang', '2017-12-12');";
?>