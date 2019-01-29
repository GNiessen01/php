<?php
function berekenfarhenheit ($celcius){
    $farh = 1.8 * $celcius;
    return $farh;
}

$fahrenheit = berekenfarhenheit(10);
echo $fahrenheit."$farh"." graden farhenheit en "."$celcius"." graden celcius";