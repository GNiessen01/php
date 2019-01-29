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
        height: 20px;
    }
</style>

<?php
$clubs = ["De spartelkuikens" => 25 ,
          "De waterbuffels" => 32,
          "Plonsmdrin" => 11,
          "Bommetje" => 23];


?>
<table border="1px">
<?php
foreach ($clubs as $key => $value ) {
$plaatjes = floor($value / 5);

    echo '<tr><td>' . $key . '</td>' . '<td>' . $value . '</td>'.'<td>';
    for ($i = 0 ; $i < $plaatjes ; $i++) {
        echo '<img src="zwemmen/zwemmen.jpg">';
    }
    '</td>'.'</tr>';
}
?>



</table>
</body>
</html>
