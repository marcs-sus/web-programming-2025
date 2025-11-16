<?php
require_once 'lib/db/db_connection.php';
require_once 'lib/db/query.php';

$conn = new DbConnection();
$conn->setIp('localhost');
$conn->setPort(5432);
$conn->setUser('postgres');
$conn->setPassword('postgres');
$conn->setDatabase('local');

if ($conn->connect()) {
    echo $conn->getStatus() . "<br>";

    $query = new Query($conn);
    $query->setSql("select * from tbpessoa");
    $query->open();
    while ($row = $query->getNextRow()) {
        echo print_r($row) . "<br>";
    }

    $query->update("tbpessoa", "pesnome, pesemail", array("maria", "maria@gmail.com"), "pescodigo = 2");

    $query->insert("tbpessoa", "pesnome, pesemail, pespassword, pescidade, pesestado", array("lucas", "lucas@uni.edu", "lucas", "Rio do Sul", "SP"));

    $query->delete("tbpessoa", "pescodigo = 3");
}

$conn->disconnect();
echo $conn->getStatus();
