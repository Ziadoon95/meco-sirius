<?php
session_start();
var_dump($_SESSION);
require_once('../../db/db.php');


$sql = "DELETE FROM `utilisateurs` WHERE `user_id`=:id";

$query = $conn->prepare($sql);

$query->bindValue(':id', $_SESSION["user_id"]);
$query->execute();

$sql = "DELETE FROM `articles` WHERE `user_id`=:id";

$query = $conn->prepare($sql);

$query->bindValue(':id', $_SESSION["user_id"]);
$query->execute();

session_unset();

 header('Location: ../../client/indexArticles.php');