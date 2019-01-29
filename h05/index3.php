<?php

$gebruikers = array(
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
);

// Bestaan de variabelen wel?
if (!isset($_POST["email"])) {
    exit("Doei");
}
if (!isset($_POST["wachtwoord"])) {
    exit("Doei");
}

// Zit er ook iets in die variabelen?
if($_POST["email"] == "") {
    echo "U heeft geen toegang";
    exit("<br><a href=\"index3.html\">Terug naar het formulier</a>");
};
if($_POST["wachtwoord"] == "") {
    echo "U heeft geen toegang";
    exit("<br><a href=\"index3.html\">Terug naar het formulier</a>");
};

// Variabelen uitlezen/opslaan
$email = $_POST["email"];
$wachtwoord = $_POST["wachtwoord"];

// Op zoek naar een match!
foreach ($gebruikers as $key => $value){
    if ($email == $key && $wachtwoord == $value) {
        exit("Je bent ingelogd als $key.");
    }
}

// In geval er geen match is, dan...
exit("Hoepel op!");

?>

<h1>Welkom!</h1>


//print_r($_POST["email"]);


