<?php

use App\Entity\Fiora;
use App\Entity\Nami;
use App\Entity\Udyr;
use App\Entity\Vayne;
use App\Entity\Vex;

use App\Controller\FioraController;
use App\Controller\NamiController;
use App\Controller\UdyrController;
use App\Controller\VayneController;
use App\Controller\VexController;

require_once __DIR__ . '/vendor/autoload.php';

$fiora = new Fiora();
$fioraController = new FioraController($fiora);

$nami = new Nami();
$namiController = new NamiController($nami);

$udyr = new Udyr();
$udyrController = new UdyrController($udyr);

$vayne = new Vayne();
$vayneController = new VayneController($vayne);

$vex = new Vex();
$vexController = new VexController($vex);


$fioraController->attaquer($fiora);
$vayneController->attaquer($vayne);
$vexController->attaquer($vex);

$namiController->regenererLaVie($nami);
$udyrController->regenererLaVie($udyr);

$namiController->attaquer($nami);
$udyrController->attaquer($udyr);
