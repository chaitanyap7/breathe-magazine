<?php 
header('Content-Type: application/json');
echo "get data";
echo "<pre>";
$data = file_get_contents("https://medium.com/@ev/latest");
$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);

//echo $xml;
echo "</pre>";

?>