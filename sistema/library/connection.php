<?php
class Database{
    private $resultado;

    /**
    *
    * @var PDO
    */
    private $connection;

    public function connect(){
      try {
          $strConnection = "mysql:host=localhost;dbname=beardsbusiness";

          $arrConfig = array(
             // Configura o comando de inicialização. - set names = Comando mysql

             PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"   
          );
          $this->connection = new PDO($strConnection,'root','macaco22',$arrConfig);

          //Modo de erro: Só avisa quando fodeu.
          $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      } catch (Exception $e) {
        //Retorno para o sistema operacional.  
        exit(1);
      }
      return true;  
    }

    public function closeConnection(){
        $this->connection = null;
    }

    public function runSQLScript(string $sql){
        //conecta com o banco
        $this->connect();

        //Limpa a variavel resultado.
        $this->resultado = null;

        //Tratamento de Erro
        try {
            //Inicia transacao
            $this->connection->beginTransaction();

            //Prepara o banco para Receber a String SQL
            $this->resultado = $this->connection->prepare($sql);

            //Exceuta a String SQL
            $this->resultado->execute();
            
        } catch (\Throwable $th) {
            //Faz o Rollback em caso de erro.
            $this->connection->rollBack();
            return false;
        }
        //Se não houver erro executa o commit
        $this->connection->commit();

        //Fecha a conexao
        $this->closeConnection();

        return true;
        
    }
}

?>