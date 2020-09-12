<?php
//inclure le fichier de connexion pour appliquer les requet sql sur ce db
require_once "../../db/db.php";

//isset() va retourner FALSE(0) si la variable est NULL.
if (
  !isset($_POST["userMdp"],
  $_POST["userMail"])
) {
  echo "the  is not exist";

} else {

  //avant d'inserer nos données on doit verifer si les varaible global POST n'est pas vide

  if (
    empty($_POST["userMail"]) || empty($_POST["userMdp"])
  ) {
    header("Location:../connexion.php?status=300");
  } else {
    try {
      $userMail = trim($_POST["userMail"]);
      $userMdp = trim($_POST["userMdp"]);

      $stmt = $conn->prepare("SELECT * FROM `utilisateurs` WHERE user_email=:user_email
                AND user_mdp=:user_mdp");
      $stmt->execute(['user_email' => $userMail, 'user_mdp' => $userMdp]);
      $user = $stmt->fetch();
      var_dump($user);

      if (!$user) {

      } else {
        //if the user is connected then :
        $userid = $user["user_id"];

        session_start();

        $_SESSION["username"] = $user["user_nom"]." ".$user["user_prenom"] ;
        $_SESSION["user_id"] = $userid;

        header("Location: ../../client/indexArticles.php?userid=$userid");
      }
    } catch (PDOException $e) {

      echo $e->getMessage();
    }
  }
}