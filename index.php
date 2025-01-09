<?php
include_once 'db.php';
include_once 'function.php';

$headers = array('');
$filename = 'data.csv';
$sql = "SELECT * FROM `stu_data` where name='Rahul' ";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    $data = array();
    while ($row = mysqli_fetch_assoc($query)) {
        array_push(
            $data,
            array(
                $row['name'],
                $row['email'],
                $row['email'],
            )
        );
    }
    arrayToCsvDownload($headers, $data, $filename);
    exit;
} else {
    echo "Data not found";
}
?>