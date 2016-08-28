<head><title>Display present population</title>
</head>
<body>
<h1> Present City Population</h1>

<?php
mysql_connect("$OPENSHIFT_MYSQL_DB_HOST", "$OPENSHIFT_MYSQL_DB_USERNAME", "$OPENSHIFT_MYSQL_DB_PASSWORD") or die(mysql_error());

mysql_select_db("php") or die(mysql_error());

$cmp = mysql_query("select * from city ");

echo "<table border='1'>
<tr>
<th>City Name</th>
<th>Population</th>
</tr>";


while($row = mysql_fetch_array($cmp))
  {
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['population'] . "</td>";
echo "</tr>";
}

echo "</table>";

//  echo $row['name  population '];
//  echo "<br />";

mysql_close();
?>
</body>
</html>

