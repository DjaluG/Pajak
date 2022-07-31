<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pajak</title>
</head>
<body>
    
<?php
if(isset ($_GET ["Harga Barang"])){
$Harga_Barang = $_GET["Harga Barang"];
}
if(isset ($_GET ["Tarif PPnMB"])){
$Tarif_PPnMB = $_GET ["Tarif PPnMB"];     
}
if(isset ($_GET ["submit"])){
$nilai_ppnmb = $Harga_Barang * $Tarif_PPnMB;

echo "Nilai PPnMB: ".$nilai_ppnmb;
}
?>
<form action="pajak.php" method="GET"> 
       <h>Cari dulu nilai PPnMB</h3> <br>
        Harga Barang:<input type="text" name="Harga Barang"/><br>
        Tarif PPnMB:<input type="text" name="Tarif PPnMB"/>
        <input type="submit">

    </form>

</body>
</html>