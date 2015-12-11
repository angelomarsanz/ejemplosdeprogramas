<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; text/html; charset=UTF-8");

$q = ($_GET['q']);

$conn = new mysqli("localhost", "angelomarsanz", "", "c9");

$conn->set_charset("utf8");

$result = $conn->query("SELECT username, name FROM users WHERE name = '".$q."'");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"Nombre":"'  . $rs["name"] . '",';
    $outp .= '"Usuario":"'. $rs["username"]     . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
?>