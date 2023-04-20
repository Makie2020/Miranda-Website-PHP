<?php
include "./db/pages/offers.php";
include "./BladeOne-master/BladeOne-master/lib/BladeOne.php";

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$compiled = __DIR__ . '/compiled';
$blade = new BladeOne($views, $compiled, BladeOne::MODE_DEBUG);

echo $blade->run("offers", array("rooms" => getAllRooms()));
