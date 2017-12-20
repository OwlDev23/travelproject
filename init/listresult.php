<?php
    if(!empty($_GET['submit']))
    {
        include "conection.php";
        $kota = $_GET["kota"];
        $jenis = $_GET["wisata"];
        $nama = "";
        $id = "";
        if($kota == "palembang")
        {
            $id = "1";
        }
        else if($kota == "yogyakarta")
        {
            $id = "2";
        }
        if($jenis == "hotel")
        {
            $nama = "nama_hotel";
        }
        else
        {
            $nama = "nama_wisata";
        }


        $sql = "SELECT * FROM $jenis where id_kota = '$id'";
        $result = mysqli_query($con, $sql);

        

        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $nama = $row[$nama];
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
                                <td></td>
                                <td><input type='submit' name='' value='Keranjangkan'></td>
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