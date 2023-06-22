## Rapport Projet Programmation Web

1.[Presentation du site](## Presentation du site)  

2.[Techenologies](## Techenologies utilisés) 
  
  a. [le choix du multi-page](### le choix du multi-page)

  b.[Les Langages de programation utilisées](### Les Langages de programation utilisées)
    
3.[Architecture ](# Architecture du Site) 

  a.[Une petite description des fichiers extension php](### Une petite description des fichiers extension php)

   b.[Une petite desciption du contenu du dossier src](### Une petite desciption du contenu du dossier src)

4.[Comment je fait tourner le site sur serveur](# Comment je fait tourner le site sur serveur) 


## Presentation du site:

Dans le cadre de notre deuxième année en cycle de licence, il nous est proposé de programmer un site web .En effet c'est un site de recette pour les zombies c'est à dire Les utilisateurs peuvent découvire le monde des zombies ,consulter des recettes pour zombies et même  créer des recettes pour les zombies . Le site sera en version en anglais et français Et sera disponible en  version portable.

## Techenologies utilisées :

### le choix du multi-page:
Pour le format du site nous avons choisi de partir sur du multi-page car le site devra contenir  énormement  d’information .On aura une  page pour afficher les recettes, un formulaire de contacte et un formulaire aussi pour ajouter une recette.Un autre formulaire qui va permettre à l'utilisateur de s'inscrire . Vus le nombre d'information que dois contenir notre site on est partie sur du multi-page car plus intuitif pour l'utilisateur et plus agréable pour ce qui est de la navigation dans les site 

#### Les Langages utilisées:

**html5** :Pour le contenu du site 
 
**CCS**  :Pour la forme du site 

**php7** et **java script** : pour gérer le back-end du site

**sqlite** : pour la  gestion de la base de donnée

# Architecture du Site:
**Le dossier ./progWeb2**  contient des **fichier.hp** et un répertoires **/src **

#### Une petite desciption des fichiers extension php:

**index.php** : qui est la page d'accueil du site on a inclu de dans header.php et footer.php considérer comme des templates. 

**formulaire.php** : qui est la page de formulaire pour ajouter une recette 

**Database.php** :création d'un objet Php pour la gestion de la base de donnée

**formVerrif.php** : pour verifier le formulaire aprés envoie

**recette.php** : permet l'affichage des recetes 

**en.php et fr.php**:pour la traduction du site  respectivement en anglais et français

####Une petite desciption du contenu du dossier src:

**le dossier img**  :  qui contient tous les images du site

**le dossier ccs**  qui contient les fichier css pour mettre en forme le site

**le dossier template** : qui contient le fichier header.php et ** footer.php**

### Architecture de la base de donnée:

on utilise une **sqlite** pour la création de la base ainsi voici le code de la création qui est parlant :

```sqlit
$this->pdo->query('CREATE TABLE IF NOT EXISTS recette (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name_recipe VARCHAR(100) NOT NULL,
            fileToUpload BLOB NOT NULL,
            temps_cuisson  VARCHAR(100) NOT NULL,
            niveau_de_difficulte VARCHAR(100) NOT NULL,
            prix_de_revenu VARCHAR(100) NOT NULL,
            ingredient VARCHAR(100) NOT NULL,
            descript VARCHAR(5000) NOT NULL
            )');
```
**le nom de la table c'est recette** .

ET nous avons des attribus comme:

**id** : l'identifiant de la recette 

**name_recipe** : le nom de la recette

**fileToUpload** : l'image coorespondant au recette

**temps_cuisson**: le temps_necessaires pour préparer le plats

**niveau_de_difficulte**: la difficulté du plat

**prix_de_revenu**: le dépenses nécessaires à fiare pour réaliser ce plat 

**ingredient** : les ingrsient nécessaires

**description** : les différenet étapes à suivres pour réaliser la recette


# Comment je fait tourner le site sur serveur:

je travaille sur un systeme Ubuntu et pour faire tourner le site sur un servuer j'ai installer **sqlite-3 ** et **Php4.7-sqlite 3** voici la ligne de commande

**sudo apt install sqlite3 php-sqlite3 php7.4-sqlite3**
 
 ensuite il faut ouvire un terminale se déplacer dans le repertoire progWeb2 et ensuite lancer la commande suivante:

 ** php -S loclahost :8000**













