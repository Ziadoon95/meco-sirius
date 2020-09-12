 <?php
/*   $servername = "localhost";
  $sqlUserName = "root";
  $password = ""; */
  $servername = "ec2-46-137-124-19.eu-west-1.compute.amazonaws.com";
  $sqlUserName = "plahhygjpajudg";
  $password = "fcd915d7540cac284cb31ce5c8c8b09c55e72593edaea9d62c6a766a623127a7";
  
  try {
    //$conn = new PDO("mysql:host=$servername;dbname=meco", $sqlUserName, $password);
    $conn =new PDO('pgsql:host=ec2-46-137-124-19.eu-west-1.compute.amazonaws.com;port=5432;dbname=d8bj6eaum2o8hi', $sqlUserName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE  articles (
     article_id  serial  PRIMARY KEY,
    article_titre varchar(120) NOT NULL,
    article_contenu text NOT NULL,
    article_date timestamp WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP ,
    article_image_data blob DEFAULT NULL,
    article_image_type varchar(40) DEFAULT NULL,
    user_id INT DEFAULT NULL,
    categorie_nom varchar(30) DEFAULT NULL
);";
$conn->exec($sql);
      $sql_two ="CREATE TABLE  utilisateurs (
        user_id  serial PRIMARY KEY,
        user_prenom varchar(64) COLLATE utf8_bin NOT NULL,
        user_nom varchar(64) COLLATE utf8_bin NOT NULL,
        user_email varchar(64) COLLATE utf8_bin NOT NULL,
        user_mdp varchar(250) COLLATE utf8_bin NOT NULL,
        user_image mediumblob DEFAULT NULL,
        user_is_connected int(1) DEFAULT NULL
      )";    

      $conn->exec($sql_two);

  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>