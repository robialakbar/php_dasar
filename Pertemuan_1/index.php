<?php 
//Tulisan Welcome World//
echo "Welcome World";
echo "<br>";
print "robi al akbar";
echo "<br>";
var_dump("robi al akbar");
?>


<!-- PHP di dalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP di dalam HTML</title>
</head>
<body>
    <h1>Belajar PHP - PHP didalam HTML by <?php echo "robi al akbar";?></h1>
    <p><?php echo "Ini adalah Paragraf"; ?></p>
</body>
</html>

<!-- Belajar Variabel -->
<?php $nama = "alex nurdin"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "halo nama saya $nama <br>" ; ?>

</body>
</html>

<!-- Belajar Aritmatika -->
<?php
echo "<br>";
$x = 50;
$y = 100;
echo $x + $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $y / $y;
echo "<br>";
echo $y - $x;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $y / $x;
?>

<!-- Belajar Concate atau Penggabung String -->
<?php 
echo "<br><br>";
$nama_depan = " Robi";
$nama_tengah = "Al";
$nama_belakang = "Akbar";
$nama_gelar = "S.Kom";

echo $nama_depan.' '.$nama_tengah.' '.$nama_belakang.' '.$nama_gelar;
?>


<!-- Belajar Assignment -->

<?php 
echo "<br><br>";
var_dump(1 == "1");

var_dump(1 ==="1");
?> 

<!-- Belajar Logika -->
<?php
echo "<br><br>";
$x = 50;
$y = 20;
var_dump($x > $y) || ($x < $y);
var_dump($x > $y) || ($y < $x);
?>
