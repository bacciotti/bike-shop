<?php

require_once "../classes/Lead.php";
require_once "../classes/Bike.php";
require_once "../classes/Conexao.php";

session_start();
$arrDados = $_SESSION["arrDados"];

//Lead
$leadId = $_SESSION["id"];
$name = isset($_REQUEST["nomeCompleto"]) ? $_REQUEST["nomeCompleto"] : null;
$whatsapp = isset($_REQUEST["celular"]) ? $_REQUEST["celular"] : null;
$cpf = isset($_REQUEST["cpf"]) ? $_REQUEST["cpf"] : null;
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : null;
$telefone = isset($_REQUEST["telefone"]) ? $_REQUEST["telefone"] : null;
$cep = isset($_REQUEST["cep"]) ? $_REQUEST["cep"] : null;
$endereco = isset($_REQUEST["endereco"]) ? $_REQUEST["endereco"] : null;
$cidadeestado = isset($_REQUEST["cidadeEstado"]) ? $_REQUEST["cidadeEstado"] : null;

$objLead = new Lead();
$objLead->setId($leadId);
$objLead->setName($name);
$objLead->setWhatsapp($whatsapp);
$objLead->setEmail($email);
$objLead->setConvertido(1);
$objLead->setCpf($cpf);
$objLead->setEndereco($endereco);
$objLead->setCidadeestado($cidadeestado);
$objLead->setTelefone($telefone);
$objLead->setCep($cep);

//Bike
$bikeId = $_SESSION["bikeId"];
$bikepreco = $_SESSION["valorBike"];
$bikemarca = isset($_REQUEST["marcaBike"]) ? $_REQUEST["marcaBike"] : null;
$bikemodelo = isset($_REQUEST["modeloBike"]) ? $_REQUEST["modeloBike"] : null;
$bikeano = isset($_REQUEST["anobike"]) ? $_REQUEST["anobike"] : null;

$objBike = new Bike();
$objBike->setId($bikeId);
$objBike->setLeadFkId($leadId);
$objBike->setBikemarca($bikemarca);
$objBike->setBikemodelo($bikemodelo);
$objBike->setBikeano($bikeano);

$conn = new Conexao();
$flag = $conn->updateData($objLead);
if ($flag) {
    $flagBike = $conn->updateDataBike($objBike);
    if ($flagBike) {
        header("Location: ../adicionais.php");
        die();
    }
}

