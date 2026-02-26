<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("Location: login.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Privata</title>
</head>
<body>
    <h1> Area Privata</h1>
    <?php
    echo "Benvenuto, " . $_SESSION['username'] . "!";
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>