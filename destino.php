<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagens</title>
    <link rel="stylesheet" href="destino.css">
</head>
<body>
<?php
   echo "<h1>Manipulação das imagens</h1>";
   $imgs = ["imgs/Fis.jpg", "imgs/Mat.jpg", "imgs/Qui.jpg", "imgs/Port.jpg", "imgs/Ing.jpg"];

$fillArray = array_fill(0, 4, "imgs/Fis.jpg");
foreach ($fillArray as $image) {
    echo "<img src='$image' alt='Imagem' style='width:300px; height:300px;'>";
}  echo"<br>";



$PrimeiraImg = array_shift($imgs);
foreach ($imgs as $image) {
    echo "<img src='$image' alt='Imagem' style='width:300px; height:300px;'>";
}  echo"<br>";



$RemoveUltimaImg = array_pop($imgs); 
foreach ($imgs as $image) {
    echo "<img src='$image' alt='Imagem' style='width:300px; height:300px;'>";
}  echo"<br>";



array_push($imgs, "imgs/img.png");
foreach ($imgs as $image) {
    echo "<img src='$image' alt='Imagem' style='width:300px; height:300px;'>";
}  echo"<br>";



array_unshift($imgs, "imgs/Fis.jpg");
foreach ($imgs as $image) {
    echo "<img src='$image' alt='Imagem' style='width:300px; height:300px;'>";
}  echo"<br>";



?>




</body>
</html>

