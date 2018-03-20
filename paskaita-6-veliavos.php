<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Veliavos</title>
</head>
<body>

<?php

include('C:\Users\user15\Documents\server\funkcijos\gautiVeliava.php');



$salys = ["Lenkija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/pl.svg',
    "Baltarusija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/by.svg',
    "Moldova" => "https://lipis.github.io/flag-icon-css/flags/4x3/mo.svg",
    "Latvija" => "https://lipis.github.io/flag-icon-css/flags/4x3/lv.svg",
    "Slovakija" => "https://lipis.github.io/flag-icon-css/flags/4x3/sl.svg",
    "Lietuva" => "https://lipis.github.io/flag-icon-css/flags/4x3/lt.svg", ];


foreach ($salys as $salis => $veliava) {
//    $format = ' [%s] => ';
//    echo sprintf($salis, $veliava);
    echo('<img src="' . $veliava . '" height=30px >');
    echo "<br>";
}

echo "<br>";
function gautiVeliava($salys) {
foreach ($salys as $salis => $veliava) {
$salys[$salis] = sprintf('<img src="%s" height="30px">', $veliava);
}
return $salys;
}

$gautiVeliava = gautiVeliava($salys);
print_r($gautiVeliava);

?>

</body>
</html>