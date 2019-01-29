<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    img {
        width: 300px;
        height: 300px;
        margin: 5px;
    }
</style>

</body>
</html>
<?php
//$plaatje = $_POST['dier'];
//echo '<img src="img/' . $plaatje . '.jpg" alt="' . $plaatje . '">';

//print_r($_POST["dier"]);

foreach ($_POST['dier'] as $plaatje) {
//    echo $plaatje;
    echo "<img src='img/".$plaatje.".jpg'>";
}
?>

