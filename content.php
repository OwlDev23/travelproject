<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="res/css/content.css" rel="stylesheet">
    </head>
    <body>
    <form action="" method="get">
        <div id="concont">
            <center>
                <div id="inticont">
                    <!-- pesan pilih kota dan hotel/wisata -->
                    <div id="conpesan">
                        <p>Pesan wisata dan hotel</p>
                        <div>
                        <table>
                            <tr>
                                <td>Pilih kota </td>
                                <td> : </td>
                                <td>
                                    <select name='kota'>
                                    <!--tampilin kota dari php-->
                                        <?php
                                            include "init/listkota.php";
                                        ?>
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td>Penginapan </td>
                                <td> : </td>
                                <td>
                                    <select name="wisata">
                                        <?php
                                            if($_SESSION["wisata"] == "wisata")
                                            {
                                                echo("
                                                    <option value='wisata' selected>Wisata</option>
                                                    <option value='hotel'>Hotel</option>
                                                ");
                                            }
                                            else if($_SESSION["wisata"] == "hotel")
                                            {
                                                echo("
                                                    <option value='wisata'>Wisata</option>
                                                    <option value='hotel' selected>Hotel</option>
                                                ");
                                            }
                                            else{
                                                echo("
                                                    <option value='wisata'>Wisata</option>
                                                    <option value='hotel'>Hotel</option>
                                                ");
                                            }
                                        ?>
                                        
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="submit" name="submit" value="search"></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    
                    <!-- jarak -->
                    <?php
                        if(isset($_SESSION["wisata"]))
                        {
                            echo("<h2 id='dl'>Daftar List ".$_SESSION["wisata"]." di ".$_SESSION["kota"]."</h2>");
                        }
                        else
                        {
                            echo("<h2 id='dl'>Daftar List</h2>");
                        }
                        
                    ?>
                    
                    <div class="jarak">
                    </div>


                    <!-- hasil dari searcing -->
                   <?php
                        include "init/listresult.php";
                   ?>

                    <!-- hasil searching -->

                </div>
            </center>
        </div>
    </form>
    </body>
</html>