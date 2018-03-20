<?php
/**
 * Created by PhpStorm.
 * User: user15
 * Date: 2018-03-08
 * Time: 10:01
 */

function atbulinis_vardas ($vardas) {
    for ($raide = strlen($vardas); $raide >= 0; $raide-- ) {
        echo substr($vardas, -1);
        $vardas = substr($vardas,0, -1);
    }
}