<?php
//inclure le fichier de connexion pour appliquer les requet sql sur ce db
require_once "../../db/db.php";

//isset() va retourner FALSE(0) si la variable est NULL.
if (
  !isset($_POST["userFirstname"],
  $_POST["userName"],
  $_POST["userMail"],
  $_POST["userPassword"])
) {
  header("Location:../inscription.html?status=100");
} else {
  //avant d'inserer nos données on doit verifer si les varaible global POST n'est pas vide

  if (
    empty($_POST["userPassword"]) || empty($_POST["userPassword"]) || empty($_POST["userPassword"])
  ) {
    header("Location:../inscription.html?status=300");
  } else {
    try {

      $stmt = $conn->prepare("INSERT INTO `utilisateurs` ( `user_prenom`, `user_nom`, `user_email`, `user_mdp`)
            VALUES (:user_prenom ,:user_nom , :user_email, :user_mdp)");
      $stmt->bindParam(':user_prenom', $userFirstname);
      $stmt->bindParam(':user_nom', $userName);
      $stmt->bindParam(':user_email', $userMail);
      $stmt->bindParam(':user_mdp', $userPassword);

      //bCrypter le mot de passe pour que ce soit pas visible


      //remplir les données
      $userFirstname = trim($_POST["userFirstname"]);
      $userName = trim($_POST["userName"]);
      $userMail = trim($_POST["userMail"]);
      $userPassword = trim($_POST["userPassword"]);
      //executer la requet
      $stmt->execute();

      header("Location:../../homepage.php?status=200");
    } catch (PDOException $e) {

      echo $e->getMessage();
    }
  }


  //à la fin on insert les données



}