<?php


$connection = require_once 'pdo.php';
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
echo '<pre>';
var_dump($_POST);
echo '</pre>';

$id = $_POST['id'] ?? '';
if ($id) {
    $connection->updateNote($id, $_POST);
} else {
    $connection->addNote($_POST);
}

header('Location: index.php');