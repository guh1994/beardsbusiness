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
    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
    }
    public function getNomeCliente(){
        return $this->nome;
    }
    public function setNomeCliente($nome){
        $this->nome = $nome;
    }
    public function getcpfCliente()
    {
        return $this->cpf;
    }
    public function setcpfCliente($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getTelfixoCliente()
    {
        return $this->telfixo;
    }
    public function setTelfixoCliente($telfixo)
    {
        $this->telfixo = $telfixo;
    }
    public function getTelcelCliente()
    {
        return $this->telcel;
    }
    public function setTelcelCliente($telcel)
    {
        $this->telcel = $telcel;
    }
    public function getBeneficioCliente()
    {
        return $this->beneficio;
    }
    public function setBeneficioCliente($beneficio)
    {
        $this->beneficio = $beneficio;
    }
    public function getEspecieBeneficioCliente()
    {
        return $this->especieBeneficio;
    }
    public function setEspecieBeneficioCliente($especieBeneficio)
    {
        $this->especieBeneficio = $especieBeneficio;
    }
    public function getNomeMaeCliente()
    {
        return $this->nomeMae;
    }
    public function setNomeMaeCliente($nomeMae)
    {
        $this->nomeMae = $nomeMae;
    }
    public function getNomePaiCliente()
    {
        return $this->nomePai;
    }
    public function setNomePaiCliente($nomePai)
    {
        $this->nomePai = $nomePai;
    }
    public function getLogradouroCliente()
    {
        return $this->logradouro;
    }
    public function setLogradouroCliente($logradouro)
    {
        $this->logradouro = $logradouro;
    }
    public function getCEPCliente()
    {
        return $this->CEP;
    }
    public function setCEPCliente($CEP)
    {
        $this->CEP = $CEP;
    }
    public function getBairroCliente()
    {
        return $this->bairro;
    }
    public function setBairroCliente($bairro)
    {
        $this->bairro = $bairro;
    }
    public function getComplementoCliente()
    {
        return $this->complemento;
    }
    public function setComplementoCliente($complemento)
    {
        $this->complemento = $complemento;
    }
    public function getNumEndCliente()
    {
        return $this->numEnd;
    }
    public function setNumEndCliente($numEnd)
    {
        $this->numEnd = $numEnd;
    }
}



?>