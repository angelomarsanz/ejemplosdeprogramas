<?php
header ('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$q = ($_GET['q']);

$con = mysqli_connect('localhost','angelomarsanz','','c9');

mysqli_set_charset($con, "utf8");

/* 
if (!mysqli_set_charset($con, "utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($con));
    exit();
} else {
    printf("Conjunto de caracteres actual: %s\n", mysqli_character_set_name($con));
}
*/

$sql = "SELECT * FROM users WHERE username = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Usuario</th>
<th>Nombre</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>