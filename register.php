<?php 


require_once ("config1.php");

$username = $connessione->real_escape_string($_POST['username']);
$email = $connessione->real_escape_string($_POST['email']);
$password = $connessione->real_escape_string($_POST['password']);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO utenti (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if($connessione->query($sql) === TRUE){
    echo "Utente registrato con successo!";
}else{
    echo "Errore durante la registrazione: " . $connessione->error;
}

$connessione->close();

?>