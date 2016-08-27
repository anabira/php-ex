
<?php

//host=$OPENSHIFT_MYSQL_DB_HOST
//user=$OPENSHIFT_MYSQL_DB_USERNAME
//passwd=$OPENSHIFT_MYSQL_DB_PASSWORD


//$link = mysql_connect('host', 'user', 'passwd');



$link = mysql_connect('127.7.249.2', 'adminceMZEak', 'cMa2mtACKIWr');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

mysql_select_db("php") or die(mysql_error());



mysql_close($link);

?>
