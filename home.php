<?php
include "function.php";

$data = array(
    array('johndoe@example.com', '1234567890', "23"),
    array('janesmith@example.com', '9876543210', "23"),
    array('mikejohnson@example.com', '5678901234', "23")
);
$headers = array("email", "phone", "age");
$filename = 'hem.csv';
// downloadCSV($data, $headers, $filename);
arrayToCsvDownload($data, $headers, $filename);
?>