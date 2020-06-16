<?php

$nome = $_GET['nome'];
$categoria = $_GET['categoria'];

$url = "http://localhost/exercicio/curl/conexao.php?nome=$nome&categoria=$categoria";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL ,$url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_HTTPGET, 1);

$registro = curl_exec($ch);

curl_close($ch);

print_r($registro);


