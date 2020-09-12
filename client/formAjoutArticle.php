<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ajout d'un nouvel article</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/articles.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">
</head>

<?php 
define("PATH","../");
require PATH.'includes/header.php'; ?>

<body>
  <div class="ajoutArticleMainContent">
    <h1 class="titreAjouterArticle">Que souhaitez-vous publier aujourd'hui ?</h1>
    <div class="o-formulaireAjoutArticle">
      <!-- FORM  -->
      <form action="../server/article/ajoutArticle.php" method="POST" enctype="multipart/form-data">
        <div class="champsTitreCategorie">
          <div class="ajoutTitreArticle">
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="article_titre" required>
          </div>
          <div class="ajoutArticleCategorie">
            <label for="categorie">Catégorie</label></br>
            <select id="categorie" name="categorie_nom">
              <option value="Collaboration">Collaboration</option>
              <option value="Créativité">Créativité</option>
              <option value="Design">Design</option>
              <option value="développement">Web développement</option>
            </select>
          </div>
        </div>
        <div class="ajoutArticleContenu">
          <label for="contenu"></label>
          <textarea class="champContenu" name="article_contenu" id="contenu" required cols="150" rows="20"
            spellcheck="true" minlength="200"></textarea>
        </div>
        <div class="ajoutImage">
          <img src="../assets/images/ajout-image-icon.svg">
          <input class="choisirFichier" type="file" name="article_image" value="ajouter une image" required>
        </div>
        <div class="btnAjoutArticle">
          <div class="annulerArticle" id="cancel">
            <a class="btnAnnulerArticle" href="indexArticles.php">Annuler</a>
          </div>
          <div class="envoyerArticle" id="submit">
            <button class="btnPublierArticle" type="submit" value="Publier">Publier</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php require PATH.'includes/footer.php'; ?>
</body>

</html>