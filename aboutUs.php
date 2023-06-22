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
    <link rel="stylesheet" href="src/css/footer.css">
    <meta name="viewport" content="width=320" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <title>ZombieCook</title>

</head>
<body>
    <?php include_once './src/template/header.php'?>

    
    <article class="zommbie_lawyer ">
        <h2>  welcome to the zombie community</h2>
    
        <p>
            Altera sententia est, quae definit amicitiam paribus officiis ac voluntatibus.<
             Hoc quidem est nimis exigue et exiliter ad calculos vocare amicitiam, ut par sit ratio acceptorum et datorum. 
             Divitior mihi et affluentior videtur esse vera amicitia nec observare restricte, ne plus reddat quam acceperit;
              neque enim verendum est, ne quid excidat, aut ne quid in terram defluat, aut ne plus aequo quid 
              in amicitiam congeratur.
        </p>
        <p>
            Vide, quantum, inquam, fallare, Torquate. oratio me istius philosophi non offendit;
            nam et complectitur verbis, quod vult, et dicit plane, quod intellegam; et tamen ego a philosopho,
            si afferat eloquentiam, non asperner, si non habeat, non admodum flagitem.
            re mihi non aeque satisfacit, et quidem locis pluribus. sed quot homines, tot sententiae; falli igitur possumus.
        </p>

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
        <p>
            Fieri, inquam, Triari, nullo pacto potest, ut non dicas, quid non probes eius, a quo dissentias.
            quid enim me prohiberet Epicureum esse, si probarem, quae ille diceret? cum praesertim illa perdiscere 
            ludus esset.Quam ob rem dissentientium inter se reprehensiones non sunt vituperandae, maledicta,
             contumeliae, tum iracundiae,contentiones concertationesque in disputando pertinaces indignae
              philosophia mihi videri solent.
        </p>
        <p>
            Horum adventum praedocti speculationibus fidis rectores militum tessera data sollemni armatos
             omnes celeri eduxere procursu et agiliter praeterito Calycadni fluminis ponte
            , cuius undarum magnitudo murorum adluit turres in speciem locavere pugnandi. 
            neque tamen exiluit quisquam nec permissus est congredi,. formidabatur enim 
             
             flagrans vesania manus et superior numero et ruitura sine respectu salutis in ferrum.
            Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine
             brevi spatio disparatur,refertum mercatoribus opulentis, ubi annua sollemnitate prope 
             Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda 
             quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.
        </p>

        <p>Raptim igitur properantes ut motus sui rumores celeritate nimia praevenirent,
           vigore corporum ac levitate confisi per flexuosas semitas ad summitates collium tardius evadebant.
           et cum superatis difficultatibus arduis ad supercilia venissent fluvii Melanis alti et verticosi, 
            qui pro muro tuetur accolas circumfusus, augente nocte adulta terrorem quievere paulisper lucem
           opperientes. arbitrabantur enim nullo inpediente transgressi inopino adcursu adposita quaeque 
            vastare, sed in cassum labores pertulere gravissimos.
        </p>
        
    </article>

    <?php include_once './src/template/footer.php'?>


</body>