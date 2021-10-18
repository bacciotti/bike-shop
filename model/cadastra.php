<?php
require_once "../classes/Lead.php";
require_once "../classes/Bike.php";
require_once "../classes/Conexao.php";

$name = isset($_REQUEST["nome"]) ? $_REQUEST["nome"] : null;
$whatsapp = isset($_REQUEST["telefone"]) ? $_REQUEST["telefone"] : null;
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : null;
$valorBike = isset($_REQUEST["valorBike"]) ? $_REQUEST["valorBike"] : null;

$objLead = new Lead();
$objLead->setName($name);
$objLead->setEmail($email);
$objLead->setWhatsapp($whatsapp);
$objLead->setConvertido(0);

$conn = new Conexao();

$flag = $conn->insertData($objLead);
if ($flag) {
    session_start();
    $_SESSION["id"] = $flag;
    $_SESSION["valorBike"] = $valorBike;

    $_SESSION["nomeLead"] = $name;
    $_SESSION["whatsappLead"] = $whatsapp;
    $_SESSION["emailLead"] = $email;

    $objBike = new Bike();
    $objBike->setLeadFkId($flag);
    $objBike->setBikepreco($valorBike);
    $flagBike = $conn->insertDataBike($objBike);
    if ($flagBike){
        $_SESSION["bikeId"] = $flagBike;
        header("Location: ../escolha.php");
        die();
    }
}

