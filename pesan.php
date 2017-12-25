<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("Location: login.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="res/css/keranjang.css">
</head>
<body>
    <?php
    include "navbarsecond.php";
    ?>
    <center>
    <div id="contab">
        <table class="table">
            <tr>
                <th>Id Nota</th>
                <th>Id Keranjang</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
            </tr>

            <?php
                
            ?>

        </table>
    </div>
    </center>
</body>
</html>

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
?>