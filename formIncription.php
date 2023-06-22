<!DOCTYPE html>
<html lang="fr">

<head>
      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="John Doe">
    <script type="text/javascript" src="src/js/valideForm.js"></script>
      <title> pages de connexion </title>
</head>

<body>

    <!-- Contenu de la page -->
    <section id=section_form>

        <div id=form_presenattion>
            <h2> formulaire d'inscription </h2>
        </div>

        <form method="post" action="" name="formulaire d'incriotion" onsubmit="return valideForm(this)" autocomplete="off">
<!-- 
            <div class="sex_user">

                    <strong>Sex:</strong><br/>
                    <input type="radio" id="r1 "name="r1" required />
                    <label for ="r1"> Masculin:</label>

                    <input type="radio" id="r1" name="r1" required/>
                    <label for="r1">Féminin:</label>

                    <input type="radio" id="r1" name= "r1" required/>
                    <label for="r1">Sex inconnu </label>

            </div> -->

            <div class="first_name_user">
                <label for="first_name"> <strong>Prenom</strong>:</label><br/>
                <input id="first_name" type="text" name="first_name"  />
            </div>

            <div class=seond_name_user>
                <label for="second_name"><strong>nom</strong>:</label><br/>
                <input type="text" id=second_name" name=second_namer  />
            </div>

            <div class="birthday _user">
                <label for=birthday> <strong>Date de naissance</strong>:
                </label><br/>
                <input type="datetime-local" id="birthday" name="birthday" required/>
            </div>

            

            <div class= "email_user">
                <label for="email"> <strong>Email</strong> :</label>
                <input type="texte" id="email" name="email" />
            </div>

            <div class="enter_password">
                <label for="password_field"><strong> Mot de Passe</strong>:
                </label><br/>
                <input type="password" id="password_field", name="password_field " />

            </div class="verrif_password">
            <label for="password_verrification"><strong>Mot de Passe</strong>   : </label><br/>
            <input type=password id="password_verrification" name="password_verrification"  /></br>
            <button type="submit">Enregistrer</button>

        </form>

    </section>
</body>

</html>