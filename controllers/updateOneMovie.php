<?php

$pdo = new PDO('mysql:host=localhost; dbname=dvd; charset=utf8', 'root', '0000');
$req = $pdo->prepare('UPDATE films SET title=:title, author=:author, parution=:parution, neighbour=:neighbour, support=:support WHERE id=:id');

$req->bindParam(':title', $_POST['title']);
$req->bindParam(':author', $_POST['author']);
$req->bindParam(':parution', $_POST['parution']);
$req->bindParam(':neighbour', $_POST['neighbour']);
$req->bindParam(':support', $_POST['support']);

$req->bindParam(':id', $_POST['id']);


$req->execute();

header('Location: ../list.php');
