<?php
require_once "../classes/Bike.php";
require_once "../classes/Conexao.php";

session_start();
$arrDados = $_SESSION["arrDados"];

//Bike
$bikeId = $_SESSION["bikeId"];
$tipoBike = isset($_REQUEST["tipoBike"]) ? $_REQUEST["tipoBike"] : null;
$materialQuadro = isset($_REQUEST["materialQuadro"]) ? $_REQUEST["materialQuadro"] : null;
$localCompra = isset($_REQUEST["localCompra"]) ? $_REQUEST["localCompra"] : null;

$chkBikeNova = isset($_REQUEST["chkBikeNova"]) ? $_REQUEST["chkBikeNova"] : null;
$chkNf = isset($_REQUEST["chkNf"]) ? $_REQUEST["chkNf"] : null;
$chkOriginal = isset($_REQUEST["chkOriginal"]) ? $_REQUEST["chkOriginal"] : null;
$chkCompeticoes = isset($_REQUEST["chkCompeticoes"]) ? $_REQUEST["chkCompeticoes"] : null;
$chkUrbana = isset($_REQUEST["chkUrbana"]) ? $_REQUEST["chkUrbana"] : null;
$chkMontanha = isset($_REQUEST["chkMontanha"]) ? $_REQUEST["chkMontanha"] : null;
$chkDiaria = isset($_REQUEST["chkDiaria"]) ? $_REQUEST["chkDiaria"] : null;
$chkLazer = isset($_REQUEST["chkLazer"]) ? $_REQUEST["chkLazer"] : null;
$chkProfissional = isset($_REQUEST["chkProfissional"]) ? $_REQUEST["chkProfissional"] : null;
$rdFrequencia1a2 = isset($_REQUEST["rdFrequencia1a2"]) ? $_REQUEST["rdFrequencia1a2"] : null;
$rdFrequencia3a5 = isset($_REQUEST["rdFrequencia3a5"]) ? $_REQUEST["rdFrequencia3a5"] : null;
$chassi = isset($_REQUEST["chassi"]) ? $_REQUEST["chassi"] : null;

$objBike = new Bike();
$objBike->setId($bikeId);
$objBike->setBiketipo($tipoBike);
$objBike->setBikematerialquadro($materialQuadro);
$objBike->setBikelocalcompra($localCompra);
$objBike->setBikenova($chkBikeNova);
$objBike->setBikenf($chkNf);
$objBike->setBikeoriginal($chkOriginal);
$objBike->setBikecompeticoes($chkCompeticoes);
$objBike->setBikelocalurbana($chkUrbana);
$objBike->setBikelocalmontanha($chkMontanha);
$objBike->setBikeutilizacaodiaria($chkDiaria);
$objBike->setBikeutilizacaolazer($chkLazer);
$objBike->setBikeutilizacaoprofissional($chkProfissional);
$objBike->setBikefrequencia1a2($rdFrequencia1a2);
$objBike->setBikefrequencia3a5($rdFrequencia3a5);
$objBike->setBikechassi($chassi);

$conn = new Conexao();
$flag = $conn->updateDataBike($objBike);
if ($flag) {
    header("Location: ../index.php");
    die();
}

