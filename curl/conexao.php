<?php

$nome = $_GET['nome'];
$categoria = $_GET['categoria'];

$conn = new PDO('mysql:host=localhost;dbname=users', "root", "");

$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$sql = "select * from users where nome like '%$nome%' and categoria like '$categoria'";

$rodar = $conn->prepare($sql);

$rodar->execute();

print_r(json_encode($rodar->fetchAll()));


