<?php

$pdo = new PDO('mysql:host=localhost; dbname=dvd; charset=utf8', 'root', '0000');
$req = $pdo->prepare('SELECT * FROM films');
$req->execute();

$movies = $req->fetchAll(PDO::FETCH_ASSOC);