<?php

use models\Cliente as classeCliente;
use models\ClientPremium as classePremium;

require_once("config.php");


$user = new classePremium();
$user->setPrivates('g.magalhaes.dev@gmail.com', "15deSetembro125", "Marcos", 25);
$user->showPremium();


$user2 = new classeCliente();
$user2->setPrivates('g.magalhaes.dev@gmail.com', "15deSetembro125", "Marcos", 25);
$user2->;


?>