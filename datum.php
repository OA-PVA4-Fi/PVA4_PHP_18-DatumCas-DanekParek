<?php
echo date("Y-m-d") . "\n";

echo date("d-i-s"). "\n";

echo date("Y-m-d H-i-s"). "\n";

echo date("d. m. Y h:s");



$zitra = strtotime("+1 day");
echo date("Y-d-m", $zitra). "\n";

$vcera = strtotime("-1 day");
echo date("Y-d-m", $vcera). "\n";

$prvdenmes = strtotime("first day of next month");
echo date("Y-d-m", $prvdenmes). "\n";

$posdenmes = strtotime("last day of next month");
echo date("Y-d-m", $posdenmes). "\n";
