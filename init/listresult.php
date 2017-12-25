<?php

    if(!empty($_GET['submit']))
    {
        $_SESSION["kota"] = $_GET["kota"];
        $_SESSION["wisata"] = $_GET["wisata"];
        loaddata();
        
        
    }
    else if(isset($_SESSION["kota"]) and isset($_SESSION["wisata"]))
    {
        loaddata();
    }

    function getidkota()
    {
        include "conection.php";        
        $namakota = $_SESSION["kota"]; 
        $sql = "SELECT * FROM kota where nama_kota = '$namakota'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                return $row["id_kota"];
            }
        }
    }

    function loaddata()
    {
        include "conection.php";
        $kota = $_SESSION["kota"];
        $jenis = $_SESSION["wisata"];
        $namajenis = "";
        $id = getidkota();
        if($jenis == "hotel")
        {
            $namajenis = "nama_hotel";
        }
        else
        {
            $namajenis = "nama_wisata";
        }


        $sql = "SELECT * FROM $jenis where id_kota = '$id'";
        $result = mysqli_query($con, $sql);

        

        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row["id_".$jenis];
                $nama = $row[$namajenis];
                $deskrip = $row["deskrip"];
                $harga = $row["harga"];
                $foto = $row["foto"];
                echo ("
                    <div id='conresult'>
                    <div class='foto'>
                        <img src='data:image/jpeg;base64',".base64_encode( $row["foto"] )."> 
                    </div>
                    <div id='detail'>
                        <table>
                            <tr>
                                <td width=100>Nama</td>
                                <td>$nama</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>$deskrip</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>Rp $harga</td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <a href='init/keranjangkan.php?id=$id'>
                                        <p>KERANJANGKAN</p>
                                    </a> 
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                ");
            }
            
            
        }else
        {
            echo("Tidak ada Data");
        }

    }


    

  
    
?>