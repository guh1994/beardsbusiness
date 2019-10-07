<?php 
class Login {
    
    private $id;
    private $login;
    private $senha;
    private $permission;
    private $name;
  
    public function getId()
    {
        return $this->id;
    }

 
    public function getLogin()
    {
        return $this->login;
    }

 
    public function getSenha()
    {
        return $this->senha;
    }


    public function getPermission()
    {
        return $this->permission;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

 
    public function setLogin($login)
    {
        $this->login = $login;
    }


    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    public function setPermission($permission)
    {
        $this->permission = $permission;
    }

    
    public function setName($name)
    {
        $this->name = $name;
    }

    
    
}

?>