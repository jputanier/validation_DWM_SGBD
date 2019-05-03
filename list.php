<?php require './controllers/getAllMovies.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Répertoire</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>
    <?php require_once './templates/header.html' ?>

    <main>
        <h1>Répertoire</h1>
        <table>
            <tr>
                <th>Titre du film</th>
                <th>Réalisateur</th>
                <th>Date de sortie</th>
                <th>Nom</th>
                <th>Type de support</th>
                <th>Supprimer</th>
                <th>Modifier</th>

            </tr>

            <?php foreach($movies as $movie): ?>
            <tr>
                <td><?= $movie['title'] ?></td>
                <td><?= $movie['author'] ?></td>
                <td><?= $movie['parution'] ?></td>
                <td><?= $movie['neighbour'] ?></td>
                <td><?= $movie['support'] ?></td>
                <td>
                    <form action="./controllers/deleteMovie.php" method="POST">
                        <input type="hidden" name="id" value="<?= $movie['id'] ?>">
                        <input type="submit" value="X">
                    </form>
                </td>
                <td>
                    <form action="./updateMovie.php" method="POST">
                        <input type="hidden" name="id" value="<?= $movie['id'] ?>">
                        <input type="submit" value="U">
                    </form>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </main>
</body>
</html>