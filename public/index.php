<?php
require __DIR__.'/../vendor/autoload.php';

use App\Hello;

$wilder = new Hello('wilder');

 echo $wilder -> talk();


