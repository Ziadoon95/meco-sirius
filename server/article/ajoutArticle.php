<?php
session_start();

/* var_dump($_SESSION);
 */include_once '../../db/db.php';

$message = '';


//Message success post article
if (isset($_POST['article_titre']) && isset($_POST['article_contenu']) && isset($_POST['article_image'])) {
  echo "";
} else {
  echo "Merci de remplir tous les champs";
}

//Déclaration des variables

//modifications 7/9/2020
$image_data = file_get_contents($_FILES["article_image"]["tmp_name"]);
$image_type = $_FILES["article_image"]["type"];
$article_titre = strip_tags($_POST['article_titre']);
$article_contenu = strip_tags($_POST['article_contenu']);
$article_cat = $_POST['categorie_nom'];
/* $article_image = strip_tags($_POST['article_image']);
*/
//Insertion données dans DB

$sql = 'INSERT INTO articles(categorie_nom , article_titre, article_contenu, article_image_data, article_image_type ,user_id) VALUES(:categ,:article_titre,
:article_contenu, :article_image , :image_type , :user_id)';

//Prepare
$statement = $conn->prepare($sql);

//Execute et afficher // Attention ne pas oublier de sécuriser avec specialcharac

if ($statement->execute([':categ'=> $article_cat , ':article_titre' => $article_titre, ':article_contenu' => $article_contenu, ':article_image' =>
$image_data, 'image_type' => $image_type, 'user_id' => $_SESSION["user_id"]])) {
   header("Location: ../../client/indexArticles.php");
 
 }