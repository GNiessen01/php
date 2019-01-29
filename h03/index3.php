<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        .rood {
            border: red solid 5px;
        }
        .green {
            border: green solid 5px;
        }
        img {
            width: 250px;
            height: 250px;
        }
    </style>
</head>
<body>
<?php
for($i = 1; $i <=9; $i++)  {
    if ($i % 2 != 0) {
        $class ="class='rood'";
    }   else {
        $class ="class='green'";
    }
    echo "<img ".$class. " src= apen/aap".$i.".jpg>";
}
?>
</body>
</html>
