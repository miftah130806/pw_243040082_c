<?php

$array =  ["epan", "cipta", "akan", "u", "asa", "esok"];
$kalimat = implode("", $array);
echo "M" . substr($kalimat, 14, 3) . " d" . substr($kalimat, 0, 4) . "mu di" . substr($kalimat, 4, 5) . "kan oleh apa yang kau kerj" . substr($kalimat, 9, 4) . " hari ini, b" . substr($kalimat, 13, 1) . "kan b" . substr($kalimat, 17, 4);