<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pajak</title>
</head>
<body>
    <fieldset>
        <legend>Nilai PPnMB</legend>
<h3> Cari dulu nilai PPnMB</h3>
<form method="post">
TARIF PPnMB = <input type="text" name="a"placeholder= "MASUKKAN ANGKA TANPA MENGGUNAKAN PERSEN" ><br>
HARGA BARANG = <input type="text" name="b"  placeholder= "MASUKKAN ANGKA" ><br>
<?php
if(isset ($_POST["submit"]) && isset($_POST["a"]) && isset($_POST["b"])){
$a=$_POST["a"];
$b=$_POST["b"];
$perkalian1= $a*($b/100);
echo "NILAI PPnMB = $perkalian1";
}
?>
<br><input type="submit" name="submit" value="Hasil">
</form>
</fieldset>

<fieldset>
        <legend>Nilai PPN</legend>
<h4> Setelah Mencari Nilai PPnMb Masukkan Nilai Kekolom Yang Tersedia</h4>
<br>
<form method="post">
TARIF PPN = <input type="text" name="a1" value="10%" readonly ><br>
HARGA BARANG = <input type="text" name="b1"  placeholder= "MASUKKAN ANGKA" ><br>
Nilai PPnMB = <input type="text" name="c1"  placeholder= "MASUKKAN ANGKA" ><br>
<?php
if(isset ($_POST["submite"]) && isset($_POST["a1"]) && isset($_POST["b1"]) &&  isset($_POST["c1"])){  
$a1=$_POST["a1"];
$b1=$_POST["b1"];
$c1=$_POST["c1"];
$perkalian = 10/100*($b1-$c1);
echo "NILAI PPN = $perkalian";
}
?>
<br><input type="submit" name="submite" value="Hasil">
</form>
</fieldset>

<fieldset>
        <legend>Total Harga</legend>
<h3> Setelah Mencari Nilai PPN Dan Nilai PPnMB</h3>
<form method="post">
Nilai PPnMB = <input type="text" name="la"placeholder= "MASUKKAN ANGKA " ><br>
HARGA BARANG = <input type="text" name="lb"  placeholder= "MASUKKAN ANGKA" ><br>
Nilai PPN = <input type="text" name="lc"  placeholder= "MASUKKAN Nilai" ><br>
<?php
if(isset ($_POST["submita"]) && isset($_POST["la"]) && isset($_POST["lb"]) && isset($_POST["lc"])){
$la=$_POST["la"];
$lb=$_POST["lb"];
$lc=$_POST["lc"];
$pertambahan= $la + $lb + $lc;
echo "Total Harga Yang Harus Dibayar = $pertambahan";
}
?>
<br><input type="submit" name="submita" value="Hasil">
</form>
</fieldset>



</body>
</html>