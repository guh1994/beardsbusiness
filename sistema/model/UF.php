<?php 
class UF implements \JsonSerializable
{
   private $idUF;
   private $siglaUF;
   
   public function getIdUF(){
       return $this->idUF;
   }
   public function setIdUF($idUF){
       $this->idUF = $idUF;
   }
    public function getSiglaUF(){
        return $this->siglaUF;
    }
    public function setSiglaUF($siglaUF){
        $this->siglaUF = $siglaUF;
    }
}


?>
