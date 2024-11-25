<?php

$prenom = '';

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    echo 'Bienvenue ' . $prenom . ' !<br>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prénom</title>
</head>
<body>
    <form action="" method="POST">

    <label for="prenom">Entrez votre prénom</label>
    <input type="text"  id="prenom" name="prenom">
    <input type="submit" name="envoyez" value="Envoyez">
    </form>
</body>
</html>