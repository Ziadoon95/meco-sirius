<?php
include_once "../../db/db.php";
if (isset($_POST['article_contenu']) && isset($_POST['id']) && isset($_POST['article_titre'])) {
  $id = $_POST["id"];
$titre = $_POST["article_titre"];
$contenu = $_POST["article_contenu"];

$sql = "UPDATE `articles` SET  `article_titre` = :article_titre,`article_contenu` = :article_contenu WHERE `articles`.`article_id` = :id";
//prepare la requette
$statment = $conn->prepare($sql);
$resul = $statment->execute(["article_titre" => $titre, "article_contenu" => $contenu, "article_id" => $id]);
var_dump($resul);

} else {
  echo "Merci de remplir tous les champs";
}


?>



<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Modifier article</h1>
  <form action="formAjoutArticle.html" method="POST">
    <div class="ajoutTitre">
      <label for="titre">Titre</label>
      <input type="text" id="titre" name="article_titre" required>
    </div>
    <div class="ajoutCategorie">
      <label for="categorie">Catégorie</label></br>
      <select id="categorie" name="categorie_nom">
        <option value="1">Collaboration</option>
        <option value="4">Créativité</option>
        <option value="2">Design</option>
        <option value="3">Web développement</option>
      </select>
    </div>
    <div class="ajoutContenu">
      <label for="contenu"></label>
      <textarea name="article_contenu" id="contenu" required cols="120" rows="20"
        placeholder="Commencez à rédiger votre article" spellcheck="true" minlength="250"></textarea>
    </div>
    <div class="ajoutImage">
      <img src="/images/ajout-image-icon.svg">
      <label for="ajout_image">Ajouter une image</label>
      <input type="file" name="article_image" value="ajouter une image" required>
    </div>
    <div class="envoyerArticle" id="submit">
      <input type="submit" value="Publier"></input>
    </div>
  </form>
</body>

</html>