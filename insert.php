
<?php

//$host = getenv('OPENSHIFT_MYSQL_DB_HOST');

//echo host

//user=$OPENSHIFT_MYSQL_DB_USERNAME
//passwd=$OPENSHIFT_MYSQL_DB_PASSWORD


define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));
 
$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT;
$db = new PDO($dsn, DB_USER, DB_PASS);

//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDBPDO";

try {

$db = new PDO($dsn, DB_USER, DB_PASS);
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $db->prepare("INSERT INTO city (name, population) 
    VALUES (:name, :population)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':population', $population);

    // insert a row
    $name = $_POST["name"];
    $population = $_POST["population"];
    $stmt->execute();


    echo "New records created successfully";

echo "<br>";
 echo $_POST["name"]; 
echo "<br>";
 echo $_POST["population"]; 

    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$db = null;



//$result = $db->exec("INSERT INTO city(name, population) VAULES(Nagpur, 4500000)");
//$insertId = $db->lastInsertId();

//foreach($db->query('SELECT * FROM city') as $row) {

//	echo "<br>";

  //  	echo $row['name'].' '.$row['population']; //etc...
//}

?>
