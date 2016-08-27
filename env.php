
<?php

//$host = getenv('OPENSHIFT_MYSQL_DB_HOST');

//echo host

//user=$OPENSHIFT_MYSQL_DB_USERNAME
//passwd=$OPENSHIFT_MYSQL_DB_PASSWORD


//$link = mysql_connect('host', 'user', 'passwd');
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));
 
$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT;
$db = new PDO($dsn, DB_USER, DB_PASS);

echo($_ENV["OPENSHIFT_APP_NAME"]);
 echo "<br>";
echo($_ENV["OPENSHIFT_MYSQL_DB_HOST"]);
 echo "<br>";
echo($_ENV["OPENSHIFT_MYSQL_DB_PORT"]);
 echo "<br>";
echo($_ENV["OPENSHIFT_MYSQL_DB_USERNAME"]);

 echo "<br>";

foreach($db->query('SELECT * FROM city') as $row) {
    echo $row['name'].' '.$row['population']; //etc...
 echo "<br>";
}

?>
