<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "angelomarsanz", "", "c9");

$result = $conn->query("SELECT username, name FROM users");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"Usuario":"'  . $rs["username"] . '",';
    $outp .= '"Nombre":"'. $rs["name"]     . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
?>