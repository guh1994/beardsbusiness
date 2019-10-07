<?php 

require_once '../library/connection.php';
require_once '../model/Login.php';

class LoginDAL {
    /*
     * 
     * @var Database
     */
    
    private static $connection = null;
    
    private static function connect(){
        if(is_null(LoginDAL::$connection)){
            LoginDAL::$connection = new Database();
        }
    }
    
    public static function login(Login $login){
        LoginDAL::connect();
        
        $user = $login->getLogin();
        $password = $login->getSenha();
      
        
        $sql = "SELECT * FROM USER_SYS WHERE USR_LOGIN = '$user' and USR_PASSWORD = '$password'";
        
       LoginDAL::$connection->runSQLScript($sql);
       
       return loginDAL::$connection->getResultados();
    }
    
 
 
}
?>