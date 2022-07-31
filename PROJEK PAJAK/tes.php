<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pajak</title>
    <link rel="stylesheet" href="yom.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
<div class="d1">
<fieldset>
        <legend>Nilai PPnMB</legend>
<h3> Cari dulu nilai PPnMB</h3>
<form method="post">
TARIF PPnMB = <input type="text" name="a"placeholder= "MASUKKAN ANGKA TANPA MENGGUNAKAN PERSEN" ><br>
HARGA BARANG = <input type="text" name="b"  placeholder= "MASUKKAN ANGKA" ><br>
<?php
if(isset ($_POST["submit"])){
$a=$_POST["a"];
$b=$_POST["b"];
$perkalian1= $a*($b/100);
}


?>


<br><input type="submit" name="submit" value="Hasil">
</form>
<?php if(isset($_POST['submit'])){ ?>
			<input type="text" value="<?php echo $perkalian1; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>	



</fieldset>
</div>
<div class="d1">
<fieldset>
        <legend>Nilai PPN</legend>
<h4> Setelah Mencari Nilai PPnMb Masukkan Nilai Kekolom Yang Tersedia</h4>
<br>
<form method="post">
TARIF PPN = <input type="text" name="a1" value="10%" readonly ><br>
HARGA BARANG = <input type="text" name="b1"  placeholder= "MASUKKAN ANGKA" ><br>
Nilai PPnMB = <input type="text" name="c1"  placeholder= "MASUKKAN ANGKA" ><br>
<?php
if(isset ($_POST["submite"]))
{
$a1=$_POST["a1"];
$b1=$_POST["b1"];
$c1=$_POST["c1"];
   $perkalian = 10/100*($b1-$c1);
echo "NILAI PPN = $perkalian";
}

?>
<br><input type="submit" name="submite" value="Hasil">
</form>

<?php if(isset($_POST['submite'])){ ?>
			<input type="text" value="<?php echo $perkalian; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>	



</fieldset>
</div>
<div class="d1">
<fieldset>
        <legend>Total Harga</legend>
<h3> Setelah Mencari Nilai PPN Dan Nilai PPnMB</h3>
<form method="post">
Nilai PPnMB = <input type="text" name="la"placeholder= "MASUKKAN ANGKA " ><br>
HARGA BARANG = <input type="text" name="lb"  placeholder= "MASUKKAN ANGKA" ><br>
Nilai PPN = <input type="text" name="lc"  placeholder= "MASUKKAN Nilai" ><br>
<?php
if(isset ($_POST["submita"])){
$la=$_POST["la"];
$lb=$_POST["lb"];
$lc=$_POST["lc"];
$jumlah= $la + $lb + $lc;


echo "Jumlah Yang Harus Dibayar $jumlah";

}
?>
<br><input type="submit" name="submita" value="Hasil">
</form>
<?php if(isset($_POST['submita'])){ ?>
			<input type="text" value="<?php echo $jumlah; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>	



</fieldset>
</div>


</body>
</html>