<?php

$pdo = new PDO('mysql:host=localhost; dbname=dvd; charset=utf8', 'root','0000');
$req = $pdo->prepare('INSERT INTO films(title, author, parution, neighbour, support) VALUES (:title, :author, :parution, :neighbour, :support)');
$req->bindParam(':title', $_POST['title']);
$req->bindParam(':author', $_POST['author']);
$req->bindParam(':parution', $_POST['parution']);
$req->bindParam(':neighbour', $_POST['neighbour']);
$req->bindParam(':support', $_POST['support']);

$req->execute();


header('Location: ../list.php');