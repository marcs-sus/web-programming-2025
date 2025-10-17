<?php
$filePath = "../data/people.json";

if (!file_exists($filePath)) {
    touch($filePath);
}

$data = [
    'pesnome' => $_POST['pesnome'],
    'pessobrenome' => $_POST['pessobrenome'],
    'pesemail' => $_POST['pesemail'],
    'pespassword' => password_hash($_POST['pespassword'], PASSWORD_DEFAULT),
    'pescidade' => $_POST['pescidade'],
    'pesestado' => $_POST['pesestado'],
];

file_put_contents($filePath, json_encode($data) . PHP_EOL, FILE_APPEND);

echo "Dados salvos com sucesso em " . $filePath . "<br>";

print_r($data);
