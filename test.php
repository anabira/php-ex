<?php
define( "DB_SERVER", getenv('OPENSHIFT_MYSQL_DB_HOST'));
echo "Host1 define: ".DB_SERVER;
echo "<br>Host2 getenv: ". getenv('OPENSHIFT_MYSQL_DB_HOST');
echo "<br>Host3 _env: ". $_ENV['OPENSHIFT_MYSQL_DB_HOST'];
echo "<br>Host4 _server: ". $_SERVER['OPENSHIFT_MYSQL_DB_HOST'];
echo "<br>Openshift App Name: ". $_ENV['OPENSHIFT_APP_NAME'];
?>

