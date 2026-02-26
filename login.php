<?php

require_once ("config1.php");
if($_SERVER["REQUEST_METHOD"] === "POST"){
$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);

    $sql_select = "SELECT * FROM utenti WHERE username = '$username'";
    if($result = $connessione->query($sql_select)){
        if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['Password'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $row['id'];
            header("Location: area-privata.php");
            exit;
        }else{
        echo "Username o password errati.";
        }
    }else{
        echo "non ci si sono account con quel username.";
    }
}else{
    echo "Errore in fase di Login";
}

$connessione->close();
}




