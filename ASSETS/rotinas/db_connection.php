<?php
// database Connection
$hostname = "localhost";
$username = "root";
$password = "031344";
$db =  "cadastro_trabalho";

//$hostname = "localhost";
//$username = "root";
//$password = "";
//$db =  "todophp";
try {
    $conn = new mysqli($hostname, $username, $password, $db);

    if ($conn->connect_error) {
        die("Erro de conexão com banco de dados" . $conn->connect_error);
    }

    session_start();
    error_reporting('1');
} catch (Exception $e) {
    print "Ocorreu um erro de conexão com banco de dados!";
    exit();
}
