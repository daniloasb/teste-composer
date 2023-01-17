<?php

use Daniloasb\TesteComposer\Calculadora;

require __DIR__."/vendor/autoload.php";

$calculadora = new Calculadora;

echo $calculadora->soma(1000,500);
