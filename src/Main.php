<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../src/Saxo.php';
require __DIR__ . '/../src/Violon.php';



use App\Saxo;
use App\Violon;
use App\Guitare;


$i1 = new Guitare();
$i1->joue();

$iv1 = new Saxo();
$iv1->souffle() ;

$ac1 = new Violon();
$ac1->tendre() ;
$ac1->utiliserArche();

