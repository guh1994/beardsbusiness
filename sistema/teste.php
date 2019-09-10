<?php
require_once("./library/connection.php");

$database = new Database;

if($database->connect() == true){
    echo "foi";

}




?>