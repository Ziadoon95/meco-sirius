<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Index articles</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/articles.css">
  <link href=" https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <?php 
  require_once "../db/db.php";

  define("PATH","../");
  include PATH."includes/header.php"; 
if(isset($_SESSION["user_id"]))
{
  $sql = 'SELECT * FROM articles WHERE user_id =:user_id';

$statement = $conn->prepare($sql);

$statement->execute(["user_id" => $_SESSION["user_id"]]);

$articles = $statement->fetchAll(PDO::FETCH_ASSOC);
}else{
  header("Location: ./connexionLoginInterface.php");
}


//attention pas oublier la gestion des erreurs

  ?>
  <div class="userInfo">
    <div class="userImage"><img src="../assets/images/Jane-Doe.png"></div>
    <div class="lienModifierProfil"><a href="./parametres.php">Modifier profil</a></div>
  </div>
  <hr width="40%" size="2">
  <?php foreach ($articles as $value) {
  ?>
  <div class=" listeArticles">
    <div class="imageContent">
      <?php
        echo "<embed src='data:" . $value["article_image_type"] . ";base64," . base64_encode($value['article_image_data']) . "'width='250'/>";  ?>
    </div>
    <div class="detailsContent">
      <a class="hoverArticle" href="..\server\article\readArticle.php?id=<?= $value['article_id']; ?>">
        <div class="detailsArticleTitre"><?= $value['article_titre']; ?></div>
      </a>
      <div class="detailsArticleDate"><?= $value['article_date']; ?></div>

      <div class="btnChangeArticle">
        <a href="../server/article/updateArticle.php?id=<?= $value['article_id']; ?>">
          <div class="btnModifier">Modifier
          </div>
        </a>
        <a href="../server/article/supprimer.php?id=<?= $value['article_id']; ?>">
          <div class="btnSupprimer">Supprimer</div>
        </a>
      </div>
    </div>
  </div>
  </div>
  <?php
  };
  ?>
  </div>
  <?php require PATH.'includes/footer.php'; ?>
</body>

</html>