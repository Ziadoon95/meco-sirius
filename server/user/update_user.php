<?php
session_start();
require_once '../../db/db.php';
var_dump($_SESSION);
$user_nom=$_GET["userName"];
$user_prenom=$_GET["userFirstname"];
$user_email=$_GET["userMail"];
$user_mdp=$_GET["userPassword"];


$data = [
    'user_nom' => $user_nom,
    'user_prenom' => $user_prenom,
    'user_mdp' => $user_mdp,
    'user_email' => $user_email,
    'id' => $_SESSION["user_id"]
];

$sql = "UPDATE utilisateurs SET user_nom=:user_nom, `user_prenom`= :user_prenom ,`user_mdp`=:user_mdp , `user_email`=:user_email  WHERE user_id=:id";
$stmt= $conn->prepare($sql);
$res = $stmt->execute($data);

var_dump($res);