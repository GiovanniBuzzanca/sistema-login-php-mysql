<?php

require_once ("config1.php");

session_start();

$_SESSION = array();

session_destroy();

header("Location: login.html");
exit;