<?php
class Cliente implements \JsonSerializable
{
    private $idCliente;
    private $nome;
    private $cpf;
    private $telfixo;
    private $telcel;
    private $beneficio;
    private $especieBeneficio;
    private $nomeMae;
    private $nomePai;
    private $logradouro;
    private $CEP;
    private $bairro;
    private $complemento;
    private $numEnd;

    public function getIdCliente(){
        return $this->idCliente;
    }
    public function setIdCliente(){
        $this->idCliente = $idCliente;
    }
    public function getNomeCliente(){
        return $this->nome;
    }
    public function setNomeCliente(){
        $this->nome = $nome;
    }
    public function getcpfCliente()
    {
        return $this->cpf;
    }
    public function setcpfCliente()
    {
        $this->cpf = $cpf;
    }
    public function getTelfixoCliente()
    {
        return $this->telfixo;
    }
    public function setTelfixoCliente()
    {
        $this->telfixo = $telfixo;
    }
    public function getTelcelCliente()
    {
        return $this->telcel;
    }
    public function setTelcelCliente()
    {
        $this->telcel = $telcel;
    }
    public function getBeneficioCliente()
    {
        return $this->beneficio;
    }
    public function setBeneficioCliente()
    {
        $this->beneficio = $beneficio;
    }
    public function getEspecieBeneficioCliente()
    {
        return $this->especieBeneficio;
    }
    public function setEspecieBeneficioCliente()
    {
        $this->especieBeneficio = $especieBeneficio;
    }
    public function getNomeMaeCliente()
    {
        return $this->nomeMae;
    }
    public function setNomeMaeCliente()
    {
        $this->nomeMae = $nomeMae;
    }
    public function getNomePaiCliente()
    {
        return $this->nomePai;
    }
    public function setNomePaiCliente()
    {
        $this->nomePai = $nomePai;
    }
    public function getLogradouroCliente()
    {
        return $this->logradouro;
    }
    public function setLogradouroCliente()
    {
        $this->logradouro = $logradouro;
    }
    public function getCEPCliente()
    {
        return $this->CEP;
    }
    public function setCEPCliente()
    {
        $this->CEP = $CEP;
    }
    public function getBairroCliente()
    {
        return $this->bairro;
    }
    public function setBairroCliente()
    {
        $this->bairro = $bairro;
    }
    public function getComplementoCliente()
    {
        return $this->complemento;
    }
    public function setComplementoCliente()
    {
        $this->complemento = $complemento;
    }
    public function getNumEndCliente()
    {
        return $this->numEnd;
    }
    public function setNumEndCliente()
    {
        $this->numEnd = $numEnd;
    }
}



?>