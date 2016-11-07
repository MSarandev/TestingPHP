<?php
//DEBUG HEADER
print('<p>ERRORS (if any):</p>');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
print('<hr>');

$db = new mysqli(
    "eu-cdbr-azure-north-e.cloudapp.net",
    "b214ab9683081c",
    "c0fcd14a",
    "ms8080" );

// -    -   -   -   -   -   -   -   -   

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Select all the rows in the markers table

$query = "SELECT * FROM markers WHERE 1";
$result = $db_conn->query($query);
if (!$result) {
    die('Nothing in result: ');
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = $result->fetch_array()){
    // ADD TO XML DOCUMENT NODE
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("name",$row['name']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("lat", $row['lat']);
    $newnode->setAttribute("lng", $row['lng']);
    $newnode->setAttribute("type", $row['type']);
}


$result->close();
$db_conn->close();

echo $dom->saveXML();

?>