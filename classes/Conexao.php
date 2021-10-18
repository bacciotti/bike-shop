<?php


class Conexao
{
    public $conn;

    public function __construct()
    {
        $servername = "";
        $username = "";
        $database = "";
        $password = "";

        $this->conn = new mysqli($servername, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Falha na conexão com banco de dados: " . $this->conn->connect_error);
        }
    }

    public function insertData($objLead)
    {
        $sql = "INSERT INTO lead (name, whatsapp, email, convertido, cpf, endereco, cidadeestado, telefone, cep)
            VALUES (' "
            . $objLead->getName() . "', 
            '" . $objLead->getWhatsapp() . "', 
            '" . $objLead->getEmail() . "', 
            '" . $objLead->getConvertido() . "', 
            '" . $objLead->getCpf() . "', 
            '" . $objLead->getEndereco() . "', 
            '" . $objLead->getCidadeestado() . "', 
            '" . $objLead->getTelefone() . "', 
            '" . $objLead->getCep() . "')";

        if ($this->conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        } else {
            return $this->conn->insert_id;
        }
        $this->conn->close();
    }

    public function updateData($objLead)
    {
        $sql = "UPDATE 
                    lead 
                SET
                    name = '".$objLead->getName()."', 
                    whatsapp = '".$objLead->getWhatsapp()."', 
                    email = '".$objLead->getEmail()."', 
                    convertido = '".$objLead->getConvertido()."', 
                    cpf = '".$objLead->getCpf()."', 
                    endereco = '".$objLead->getEndereco()."', 
                    cidadeestado = '".$objLead->getCidadeestado()."', 
                    telefone = '".$objLead->getTelefone()."', 
                    cep = '".$objLead->getCep()."'  
                WHERE 
                    id = " . $objLead->getId();

        if ($this->conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        } else {
            return true;
        }
        $this->conn->close();
    }

    public function insertDataBike($objBike)
    {
        $sql = "INSERT INTO bike (lead_fk_id, marca, modelo, ano, preco, tipo, 
                quadro, local_compra, local_urbana, local_estrada, local_montanha, 
                utilizacao_diaria, utilizacao_lazer, utilizacao_profissional, frequencia1a2, frequencia3a5, 
                nova, nf, original, competicoes)
            VALUES (' "
            . $objBike->getLeadFkId() . "', 
            '" . $objBike->getBikemarca() . "', 
            
            '" . $objBike->getBikemodelo() . "', 
            '" . $objBike->getBikeano() . "', 
            '" . $objBike->getBikepreco() . "', 
            '" . $objBike->getBiketipo() . "', 
            '" . $objBike->getBikematerialquadro() . "', 
            '" . $objBike->getBikelocalcompra() . "', 
            '" . $objBike->getBikelocalurbana() . "', 
            '" . $objBike->getBikelocalestrada() . "', 
            '" . $objBike->getBikelocalmontanha() . "', 
            '" . $objBike->getBikeutilizacaodiaria() . "', 
            '" . $objBike->getBikeutilizacaolazer() . "', 
            '" . $objBike->getBikeutilizacaoprofissional() . "', 
            '" . $objBike->getBikefrequencia1a2() . "', 
            '" . $objBike->getBikefrequencia3a5() . "', 
            '" . $objBike->getBikenova() . "', 
            '" . $objBike->getBikenf() . "', 
            '" . $objBike->getBikeoriginal() . "', 
            '" . $objBike->getBikecompeticoes() . "')";

        if ($this->conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        } else {
            return $this->conn->insert_id;
        }
        $this->conn->close();
    }

    public function updateDataBike($objBike)
    {
        $sql = "UPDATE 
                    bike 
                    
                SET
                    lead_fk_id = '".$objBike->getLeadFkId()."',
                    marca = '".$objBike->getBikemarca()."',
                    modelo = '".$objBike->getBikemodelo()."',
                    ano = '".$objBike->getBikeano()."',
                    preco = '".$objBike->getBikepreco()."',
                    tipo = '".$objBike->getBiketipo()."',
                    quadro = '".$objBike->getBikematerialquadro()."',
                    local_compra = '".$objBike->getBikelocalcompra()."',
                    local_urbana = '".$objBike->getBikelocalurbana()."',
                    local_estrada = '".$objBike->getBikelocalestrada()."',
                    local_montanha = '".$objBike->getBikelocalmontanha()."',
                    utilizacao_diaria = '".$objBike->getBikeutilizacaodiaria()."',
                    utilizacao_lazer = '".$objBike->getBikeutilizacaolazer()."',
                    utilizacao_profissional = '".$objBike->getBikeutilizacaoprofissional()."',
                    frequencia1a2 = '".$objBike->getBikefrequencia1a2()."',
                    frequencia3a5 = '".$objBike->getBikefrequencia3a5()."',
                    nova = '".$objBike->getBikenova()."',
                    nf = '".$objBike->getBikenf()."',
                    original = '".$objBike->getBikeoriginal()."',
                    competicoes = '".$objBike->getBikecompeticoes()."',
                    chassi = '".$objBike->getBikechassi()."'
                WHERE 
                    id = " . $objBike->getId();

        if ($this->conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        } else {
            return true;
        }
        $this->conn->close();
    }
}