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
    <link rel="stylesheet" href="src/css/recette.css">
    <link rel="stylesheet" href="src/css/footer.css">
    <meta name="viewport" content="width=320" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
      <title>ZombieCook</title>
</head>

<body>

    <?php include_once './src/template/header.php' ?>

    <article class="presentation_site">

        <h1 class="slogant_site"> <?= $lang['form']['f1'] ?></h1>

        <a href="aboutUs.php"> <?= $lang['index']['h2'] ?></a>

    </article>
    <div class="button_add_recipes">

        <a href="formulaire.php"><?= $lang['index']['h3'] ?></a>
    </div>

    <article class="formulaire__view">

        <div class="information_utile">

            <h2><?= $lang['form']['f3']?>:</h2>

            <div class="time_cook">
                <strong><?= $lang['form']['f4']?>:</strong> 45mn
            </div>

            <div class="difficuly">
                <strong><?= $lang['form']['f5']?>:</strong> 4
            </div>

            <div class="price">
                <strong><?= $lang['form']['f6']?> :</strong> 15 euro
            </div>

        </div>
        <div class="ingredient_view">

            <h2><?= $lang['form']['f8']?>:</h2>

            <p>
                Ut enim quisque sibi plurimum confidit et ut quisque maxime virtute et sapientia sic munitus est,
                ut nullo egeat suaque omnia in se ipso posita iudicet, ita in amicitiis expetendis colendisque maxime excellit.
                Quid enim? Africanus indigens mei? Minime hercule! ac ne ego quidem illius; sed ego admiratione quadam virtutis
                eius, ille vicissim opinione fortasse non nulla, quam de meis moribus habebat,
                me dilexit; auxit benevolentiam consuetudo. Sed quamquam utilitates multae et magnae consecutae sunt,
            </p>

            <div class="description_view">

                <h2><?= $lang['form']['f7']?>:</h2>

                <p>
                    Nec piget dicere avide magis hanc insulam populum Romanum invasisse quam iuste.
                    Ptolomaeo enim rege foederato nobis et socio ob aerarii nostri angustias iusso sine ulla culpa
                    proscribi ideoque hausto veneno voluntaria morte deleto et tributaria facta est et velut hostiles
                    eius exuviae classi inpositae in urbem advectae sunt per Catonem, nunc repetetur ordo gestorum.
                </p>

                <p>
                    Ut enim quisque sibi plurimum confidit et ut quisque maxime virtute et sapientia sic munitus est,
                    ut nullo egeat suaque omnia in se ipso posita iudicet, ita in amicitiis expetendis colendisque maxime excellit.
                    Quid enim? Africanus indigens mei? Minime hercule! ac ne ego quidem illius; sed ego admiratione quadam virtutis
                    eius, ille vicissim opinione fortasse non nulla, quam de meis moribus habebat,
                    me dilexit; auxit benevolentiam consuetudo. Sed quamquam utilitates multae et magnae consecutae sunt,
                    non sunt tamen ab earum spe causae diligendi profectae.
                </p>

            </div>

        </div>

    </article>
    <?php include_once './src/template/footer.php' ?>



</body>

</html>