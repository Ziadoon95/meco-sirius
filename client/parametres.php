<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Paramètres Utilisateur</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/articles.css">
  <link href=" https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="backgroundParametres">
    <div class="parametres_mainContent">
      <div class="parametres_titre">
        <h1>Paramètres</h1>
      </div>
      <div class="parametres_userImage">
        <div class="cercle_userImage">
          <img class="userImage" src="../assets/images/Jane-Doe.png">
        </div>
        <div class="parametres_modifierImage"> <a href="">Modifier image</a></div>
      </div>
      <div class="parametres_userForm">
        <form class="parametres_form" action="../server/user/update_user.php">
          <div class="parametres_prenom"> <label for="prenom">Prénom</label> <input type="text" id="firstname"
              name="userFirstname" /></div>
          <div class="parametres_nom">
            <label for="nom">Nom</label> <input type="text" id="name" name="userName" />
          </div>
          <div class="parametres_email">
            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="userMail" />
          </div>
          <div class="parametres_motDePasse"> <label for="password">Mot de passe</label>
            <input type="password" id="password" name="userPassword">
          </div>
          <div class="parametres_suppression"><a class="link_suppression" href="../server/user/delete_user.php">Supprimer mon compte</a></div>
          <div class="btn_param">
            <div class="annuler_param" id="cancel">
              <a class="btn_annuler" href="">Annuler</a>
            </div>
            <div class="enregistrer_param" id="submit">
              <button class="btn_enregistrer" type="submit">Enregistrer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>