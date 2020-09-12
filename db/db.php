 <?php
/*   $servername = "localhost";
  $sqlUserName = "root";
  $password = ""; */
  $servername = "ec2-46-137-124-19.eu-west-1.compute.amazonaws.com";
  $sqlUserName = "plahhygjpajudg";
  $password = "fcd915d7540cac284cb31ce5c8c8b09c55e72593edaea9d62c6a766a623127a7";
  
  try {
    //$conn = new PDO("mysql:host=$servername;dbname=meco", $sqlUserName, $password);
    $conn =new PDO('pgsql:host=$servername;port=5432;dbname=d8bj6eaum2o8hi', $sqlUserName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>