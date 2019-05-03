<?php require_once './controllers/getOneMovie.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>
    <?php require_once './templates/header.html' ?>
    
    <h1>Modifier</h1>

    <form action="./controllers/updateOneMovie.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $movie['id'] ?>">
        <div>
            <label for="title">Titre du film</label>
            <input type="text" name="title" value="<?php echo $movie['title'] ?>">
        </div>
        <div>
            <label for="author">Réalisateur</label>
            <input type="text" name="author" value="<?php echo $movie['author'] ?>">
        </div>    
        <div>
            <label for="parution">Date de sortie</label>
            <input type="number" name="parution" value="<?php echo $movie['parution'] ?>">
        </div>
        <div>
            <label for="neighbour">Votre nom</label>
            <input type="text" name="neighbour" value="<?php echo $movie['neighbour'] ?>">
        </div>
        <div>
        <div><label for="support">Type de support:</label></div>
            <div>
                <input type="radio" name="support" value="Cassette">
                <label for="support">Cassette</label>
            </div>
            <div>
                <input type="radio" name="support" value="DVD">
                <label for="support">DVD</label>
            </div>
            <div>
                <input type="radio" name="support" value="Bluray">
                <label for="support">Bluray</label>
            </div>
        </div>
        <input type="submit" value="Valider" name="submit">
    </form>
</body>
</html>