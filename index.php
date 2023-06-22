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
    <link rel="stylesheet" href="src/css/footer.css">
    <meta name="viewport" content="width=320" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
      <title>ZombieCook</title>
</head>

<body>

    <?php include_once './src/template/header.php' ?>

    <article class="presentation_site">
        <h2 class="slogant_site"> <?= $lang['index']['h1'] ?></h2>
        <a href="aboutUs.php"> <?= $lang['index']['h2'] ?></a>
    </article>
    <div class="button_add_recipes">
        <a href="formulaire.php"><?= $lang['index']['h3'] ?></a>
    </div>
    <article class="first_article">
        <div class="titre_des_articles">
            <h2><?= $lang['index']['h4'] ?></h2>
        </div>
        <div class="container_article">

            <article class="article1" style="background: url(src/img/images1.jpeg);background-size:cover;">

                <a href="recette.php">Nom de la recette</a>

            </article>

            <article class="article1" style="background: url(src/img/images2.jpeg);background-size:cover;">
                <a href="recette.php">Nom de la recette</a>

            </article>
            <article class="article1" style="background: url(src/img/images3.jpeg);background-size:cover;">
                <a href="recette.php">Nom de la recette</a>
            </article>
        </div>
    </article>
    <?php include_once './src/template/footer.php' ?>

</body>

</html>