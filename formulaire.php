<?php // traduction du site
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = "en";
elseif (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "fr")
        $_SESSION['lang'] = 'fr';

    else if ($_GET['lang'] == "en")
        $_SESSION['lang'] = 'en';
}
require_once($_SESSION['lang'] . ".php");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="src/css/base.css">
    <link rel="stylesheet" href="src/css/header.css">
    <link rel="stylesheet" href="src/css/article.css">
    <link rel="stylesheet" href="src/css/formulaire.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <title>titre_de_mon_site</title>
    <meta name="viewport" content="width=320" />
    <style>
    </style>
</head>
<body>

    

    <?php include_once './src/template/header.php'?>

    <section class="formulaire">
    <div class ="contain">  
        <form method="post"  action="formulaireVerif.php" name="nom_de_mon_formulaire" autocomplete="off">
            <div class =auteur>
                <label for="name_recipe"> <?= $lang['form']['f1']?>: <span>*</span></label><input name="name_recipe"id ="name_recipe" placeholder="le nom de la recette" type=text >
            </div>
            <div class ="image de la recette">
                <label for="fileToUpload"><?= $lang['form']['f2']?> </label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class =information_sur_la_recette>
                <h2><?= $lang['form']['f3']?> </h2>
                <label for="temps_cuisson"> <?= $lang['form']['f4']?>: <span>*</span></label>
                <input name=" temps_cuisson"id ="temps_cuisson" placeholder="le temps de cuisson" type="text" >
                <label  for="niveau_de_difficulte"><?= $lang['form']['f5']?> : <span>*</span></label>
                <input name="niveau_de_difficulte"id ="niveau_de_difficulte" placeholder="1 à 5" type="text" >
                <label for ="prix_de_revenu">><?= $lang['form']['f6']?>:<span>*</span></label>
                <input name=" prix_de_revenu"id ="prix_de_revenu" placeholder="prix en euro" type="text" >
            </div>
            <div class=desccription_de_la_recette>
                <h2>><?= $lang['form']['f7']?></h2>
                <h4> ><?= $lang['form']['f8']?>:</h4>
                 <label for="ingredient"> </label> 
                 <textarea id="ingredient" name="ingredient"   rows="20" cols="50"></textarea>
                 <h4>><?= $lang['form']['f7']?>:</h4>
                 <label for ="description"></label>
                <textarea id="description" name="description" rows="25" cols="100"></textarea>
            </div>
            <div class="submit">
                <label for ="enregistrement"> </label>
                <input name="enregistrement"id ="enregistrement"  type="submit" value="soumettre">
            </div>

        </form>
    </div>
    </section>
</body>
</html>
