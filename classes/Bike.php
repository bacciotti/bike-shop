<?php


class Bike
{
    // Properties
    public $id;
    public $leadFkId;
    public $bikepreco;
    public $bikemarca;
    public $bikemodelo;
    public $bikeano;

    public $biketipo;
    public $bikematerialquadro;
    public $bikelocalcompra;

    public $bikelocalurbana;
    public $bikelocalestrada;
    public $bikelocalmontanha;

    public $bikeutilizacaodiaria;
    public $bikeutilizacaolazer;
    public $bikeutilizacaoprofissional;

    public $bikefrequencia1a2;
    public $bikefrequencia3a5;

    public $bikenova;
    public $bikenf;
    public $bikeoriginal;
    public $bikecompeticoes;
    public $bikechassi;

    // Methods
    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setLeadFkId($leadFkId)
    {
        $this->leadFkId = $leadFkId;
    }

    function getLeadFkId()
    {
        return $this->leadFkId;
    }


    function setBikemarca($bikemarca)
    {
        $this->bikemarca = $bikemarca;
    }

    function getBikemarca()
    {
        return $this->bikemarca;
    }

    function setBikemodelo($bikemodelo)
    {
        $this->bikemodelo = $bikemodelo;
    }

    function getBikemodelo()
    {
        return $this->bikemodelo;
    }

    function setBikeano($bikeano)
    {
        $this->bikeano = $bikeano;
    }

    function getBikeano()
    {
        return $this->bikeano;
    }

    function setBikepreco($bikepreco)
    {
        $this->bikepreco = $bikepreco;
    }

    function getBikepreco()
    {
        return $this->bikepreco;
    }

    function setBiketipo($biketipo)
    {
        $this->biketipo = $biketipo;
    }

    function getBiketipo()
    {
        return $this->biketipo;
    }

    function setBikematerialquadro($bikematerialquadro)
    {
        $this->bikematerialquadro = $bikematerialquadro;
    }

    function getBikematerialquadro()
    {
        return $this->bikematerialquadro;
    }

    function setBikelocalcompra($bikelocalcompra)
    {
        $this->bikelocalcompra = $bikelocalcompra;
    }

    function getBikelocalcompra()
    {
        return $this->bikelocalcompra;
    }

    function setBikelocalurbana($bikelocalurbana)
    {
        $this->bikelocalurbana = $bikelocalurbana;
    }

    function getBikelocalurbana()
    {
        return $this->bikelocalurbana;
    }

    function setBikelocalestrada($bikelocalestrada)
    {
        $this->bikelocalestrada = $bikelocalestrada;
    }

    function getBikelocalestrada()
    {
        return $this->bikelocalestrada;
    }

    function setBikelocalmontanha($bikelocalmontanha)
    {
        $this->bikelocalmontanha = $bikelocalmontanha;
    }

    function getBikelocalmontanha()
    {
        return $this->bikelocalmontanha;
    }

    function setBikeutilizacaodiaria($bikeutilizacaodiaria)
    {
        $this->bikeutilizacaodiaria = $bikeutilizacaodiaria;
    }

    function getBikeutilizacaodiaria()
    {
        return $this->bikeutilizacaodiaria;
    }

    function setBikeutilizacaolazer($bikeutilizacaolazer)
    {
        $this->bikeutilizacaolazer = $bikeutilizacaolazer;
    }

    function getBikeutilizacaolazer()
    {
        return $this->bikeutilizacaolazer;
    }

    function setBikeutilizacaoprofissional($bikeutilizacaoprofissional)
    {
        $this->bikeutilizacaoprofissional = $bikeutilizacaoprofissional;
    }

    function getBikeutilizacaoprofissional()
    {
        return $this->bikeutilizacaoprofissional;
    }

    function setBikefrequencia1a2($bikefrequencia1a2)
    {
        $this->bikefrequencia1a2 = $bikefrequencia1a2;
    }

    function getBikefrequencia1a2()
    {
        return $this->bikefrequencia1a2;
    }

    function setBikefrequencia3a5($bikefrequencia3a5)
    {
        $this->bikefrequencia3a5 = $bikefrequencia3a5;
    }

    function getBikefrequencia3a5()
    {
        return $this->bikefrequencia3a5;
    }


    function setBikenova($bikenova)
    {
        $this->bikenova = $bikenova;
    }

    function getBikenova()
    {
        return $this->bikenova;
    }


    function setBikenf($bikenf)
    {
        $this->bikenf = $bikenf;
    }

    function getBikenf()
    {
        return $this->bikenf;
    }


    function setBikeoriginal($bikeoriginal)
    {
        $this->bikeoriginal = $bikeoriginal;
    }

    function getBikeoriginal()
    {
        return $this->bikeoriginal;
    }


    function setBikecompeticoes($bikecompeticoes)
    {
        $this->bikecompeticoes = $bikecompeticoes;
    }

    function getBikecompeticoes()
    {
        return $this->bikecompeticoes;
    }

    function setBikechassi($bikechassi)
    {
        $this->bikechassi = $bikechassi;
    }

    function getBikechassi()
    {
        return $this->bikechassi;
    }

}