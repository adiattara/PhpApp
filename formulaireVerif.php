
<?php


echo $dirname = dirname(__FILE__);
include_once ('Database.php');

try{
    $dirname = dirname(__FILE__);
    $database = new Database('sqlite:'.$dirname.'/database.db');
    $name_recipe = htmlspecialchars($_POST['name_recipe']);
    $fileToUpload = htmlspecialchars($_POST['fileToUpload']);
    $temps_cuisson = htmlspecialchars($_POST['temps_cuisson']);
    $niveau_de_difficulte = htmlspecialchars($_POST['niveau_de_difficulte']);
    $prix_de_revenu   = htmlspecialchars($_POST['prix_de_revenu']);
    $ingredient = htmlspecialchars($_POST['ingredient']);
    $descript   = htmlspecialchars($_POST['description']);

    $database->insertRecette($name_recipe , $fileToUpload,$temps_cuisson,$niveau_de_difficulte,$prix_de_revenu,$ingredient,
    $descript);

    header('Location:/formulaire.php');
}
catch(Exception $e){
    echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    die();
}




