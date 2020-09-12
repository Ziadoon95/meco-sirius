<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Média Collaboratif</title>
  <link rel="stylesheet" href="../assets/css/style-inscription.css" />
</head>

<body>
  <div class=" container">
    <div class="container__mainContent">
      <div class="container__mainContent--header">
        <div class="container__mainContent__header--logo">
          <h1 class="logo">
            <img src="" alt="" />
            MECO
          </h1>
        </div>
        <div class="container__mainContent--links">
          <a href="#">A propos</a>
          <a href="#">Contact</a>
        </div>
      </div>
      <h2>Inscrivez-vous, c'est gratuit!</h2>
      <div class="container__mainContent--formulaire">
        <form method="post" action="../server/user/inscription.php">
          <input type="text" id="firstname" name="userFirstname" placeholder="Prénom" required />
          <br />
          <input type="text" id="name" name="userName" placeholder="Nom" required />
          <br />
          <input type="email" id="email" name="userMail" placeholder="Adresse e-mail" required />
          <br />
          <input type="password" id="password" name="userPassword" placeholder="Mot de passe" minlength="4" required />
          <br />
          <input type="password" id="confirmPassword" name="userPassword" placeholder="Vérifier votre mot de passe"
            required />
          <br />
          <div class="inputCheckbox">
            <input id="conditions" name="cluster" type="checkbox" value="discount" required />
            <label for="conditions">
              J'accepte
              <a href="#">les conditions d'utilisations</a>
            </label>
          </div>
           <div class="container__mainContent--buttons">
           <button class="inscription" type="submit" >
            S'inscrire
          </button>
        <button class="annuler" formaction="../homepage.php" type="submit">Annuler</button>
          
        </form>
      
      
        </div>
      </div>
    </div>
  </div>
</body>

</html>