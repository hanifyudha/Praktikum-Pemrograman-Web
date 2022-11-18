<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman PHP dengan Array</title>
</head>
<body>
<?php
$nama[1] = "Vieri";
$nama[2] = "Ardiansyah";
$nama[0] = "Almais";
echo $nama[1] . $nama[2] . $nama[0];
echo "<br>";
$jum_array = count($nama);
echo "jumlah elemen array = ". $jum_array;
?>
</body>
</html>