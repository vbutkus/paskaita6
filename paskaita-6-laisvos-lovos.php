<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laisvos lovos</title>
</head>
<body>

<?php

$visi_kambariai = ['101' => 4, '102' => 5, '103' => 2];

$uzimti_kambariai = ['102' => 1, '103' => 2, '101' => 0];


foreach ($visi_kambariai as $kambarys => $laisvos_lovos) {
    echo 'Kambario numeris - '. $kambarys.
        ', visos lovos - '. $laisvos_lovos.
        ' laisvos lovos - '. ($laisvos_lovos - $uzimti_kambariai[$kambarys]);

//    Galima nusirodyt priklausomybe atskiram var
//    $laisviKambariai = $laisvos_lovos - $uzimti_kambariai[$kambarys];
    echo '<br>';
}

?>

</body>
</html>