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
        <input type="text" id="prenom" name="prenom">
        <label for="age">Entrez votre age</label>
        <input type="text" id="age" name="age">
        <label for="email">Entrez votre email</label>
        <input type="email" id="email" name="email">
        <input type="submit" value="Envoyez">
    </form>
</body>

</html>


<?php
$prenom = '';
$age = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
}

if (isset($_POST['age']) && !empty($_POST['age'])) {
    $age = htmlspecialchars($_POST['age']);
}
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
}





$contenu = "Prénom : $prenom\nÂge : $age\nEmail : $email\n\n";


$nomFichier = 'Infos_Utilisateurs.txt';


$fichier = fopen($nomFichier, 'a');

if ($fichier) {

    fwrite($fichier, $contenu);

    fclose($fichier);

    echo 'le fichier : ' . $nomFichier . ' a bien été enregistré !';
} else {

    echo 'Erreur !! le fichier n\'a pas été enregistré';
}
}

?>



