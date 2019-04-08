<?php
use App\Wcs\Hello;

use HelloWorld\SayHello;

require __DIR__ . '../vendor/autoload.php';
$Hello = new Hello();
echo $Hello->talk();

$Helloworld = new SayHello();
echo $Helloworld->world();
?>