<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table{
        border-collapse: collapse;
    }
    td{
        border: 3px solid pink;
    }
    img{
        width: 150px;
    }
    </style>

<body>

<?php

echo "<h1>Galeria de imagens</h1>";
echo "<table><tr>";
for($x=1; $x<=5; $x++){
    echo "<td><img src= 'img/$x.jpg'></td>";
} 
    echo "</table></tr>";

echo "<table><tr>";
for ($x=6; $x<=10; $x++){
    echo "<td><img src= 'img/$x.jpg'></td>";
}

echo "</tr></table>";



?>


</body>
</html>