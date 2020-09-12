<?php
/*
 *@rachel
 */
require_once('../../db/db.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);

    $sql = "DELETE FROM `articles` WHERE `article_id`=:id";

    $query = $conn->prepare($sql);

    $query->bindValue(':id', $id);
    $query->execute();

     header('Location: ../../client/indexArticles.php');
 }

/* require_once('close.php'); */