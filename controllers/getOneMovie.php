<?php

$pdo = new PDO('mysql:host=localhost; dbname=dvd; charset=utf8', 'root', '0000');
$req = $pdo->prepare('SELECT * FROM films WHERE id=:id');
$req->bindParam(':id', $_POST['id']);
$req->execute();
$movie = $req->fetch(PDO::FETCH_ASSOC);