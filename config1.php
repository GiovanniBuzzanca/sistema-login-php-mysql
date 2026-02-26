<?php 

$host = "127.0.0.1";
$username = "root";
$password = "";
$db = "tutorial_mysql";

$connessione = new mysqli($host, $username, $password, $db);

if($connessione->connect_error){
    die("Connessione fallita: " . $connessione->connect_error);
}

?>