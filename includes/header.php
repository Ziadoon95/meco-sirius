<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header</title>
    <link rel="stylesheet" href="assets/css/articles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <header class="mainHeader">
      <div class="header_logo">
        <img
          src="<?= PATH ?>/assets/images/logo.svg"
        />
      </div>
      <div class="header_mainMenu">
        <a href="<?= PATH ?>homepage.php">
          <img
            src="<?= PATH ?>assets/images/home-icone.svg"
          />
        </a>
        <a>
          <img
            src="<?= PATH ?>assets/images/rechercher-icone.svg"
          />
        </a>
        <a
          href="<?= PATH ?>client/formAjoutArticle.php"
        >
          <img
            src="<?= PATH ?>assets/images/plus-icone.svg"
          />
        </a>
        <a
          href="<?= PATH ?>client/indexArticles.php"
        >
          <img
            src="<?= PATH ?>assets/images/profil-icone.svg"
          />
        </a>
      </div>
      <div class="header_menuUser">
        <div class="header_menuUser_connexion">
          
        <?php 
        session_start();

        if(isset($_SESSION["username"])) :?> 
              
                <a class="header_btnConnexion"
                    href="<?= PATH ?>server/user/logout.php"
                >
                  se deconnecter
                  </a>
                  </div>
                  
                  <a
                  class='header_btnInscription'
                  href="<?= PATH ?>client/indexArticles.php?id=<?=$_SESSION["user_id"]?>"
                >          
                <div class='header_menuUser_inscription'><?=$_SESSION["username"]?></div>
                </a>

          <?php else :?> 
                  <a class="header_btnConnexion"
                    href="<?= PATH ?>client/connexionLoginInterface.php"
                  >
                  se connecter
                  </a>
                  </div>
                  <a class='header_btnInscription' href="<?=PATH?>client/inscription.php">          
                    <div class='header_menuUser_inscription'>
                      inscription
                    </div>
                </a>
          <?php endif; ?>
   
       </div>
    </header>
  </body>
</html>
