<?php


class Lead
{
    // Properties
    public $id;
    public $name;
    public $whatsapp;
    public $email;
    public $convertido;
    public $cpf;
    public $endereco;
    public $cidadeestado;
    public $telefone;
    public $cep;

    // Methods
    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setWhatsapp($whatsapp)
    {
        $this->whatsapp = $whatsapp;
    }

    function getWhatsapp()
    {
        return $this->whatsapp;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setConvertido($convertido)
    {
        $this->convertido = $convertido;
    }

    function getConvertido()
    {
        return $this->convertido;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function getCpf()
    {
        return $this->cpf;
    }
    function setCidadeestado($cidadeestado)
    {
        $this->cidadeestado = $cidadeestado;
    }

    function getCidadeestado()
    {
        return $this->cidadeestado;
    }

    function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    function getEndereco()
    {
        return $this->endereco;
    }

    function setCep($cep)
    {
        $this->cep = $cep;
    }

    function getCep()
    {
        return $this->cep;
    }

    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    function getTelefone()
    {
        return $this->telefone;
    }

}